<?php

namespace App\Http\Controllers;

use App\Models\Extras;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ApplicantController extends Controller
{
    //

    public function getTable(Request $request)
    {
        $filter = $request->input();
        
        $where = array();
        if($filter['applicant']) $where[] = array('applicant_id', '=', $filter['applicant']);
        if($filter['sales']) $where[] = array('sales_manager', '=', $filter['sales']);
        if($filter['branch']) $where[] = array('branch', '=', $filter['branch']);
        if($filter['jobsite']) $where[] = array('jobsite', '=', $filter['jobsite']);
        $data['result'] = DB::table('applicants')->where($where)->paginate(8);
        foreach ($data['result'] as $key => $value) {
            $data['result'][$key]->sales_manager = DB::table('users')->where('id', $value->sales_manager)->value('name');
            $data['result'][$key]->jobsite = DB::table('jobsites')->where('code', $value->jobsite)->value('description');
            $data['result'][$key]->branch = DB::table('branches')->where('code', $value->branch)->value('description');
        }
        return view('user/applicant_list', $data);
    }

    public function getModal(Request $request)
    {
        $data = array();

        $formFields = $request->validate([
            'uid' => ['required'],
        ]);

        $data['uid'] = $formFields['uid'];
        
        $data['jobsite_select'] = DB::table('jobsites')->get();
        $data['branch_select'] = DB::table('branches')->get();
        $data['users_select'] = DB::table('users')->where("user_type", "sales")->get();

        // dd($data);
        return view('user/applicant_modal', $data);
    }

    public function profileTab(Request $request)
    {
        $data = array();

        $formFields = $request->validate([
            'uid' => ['required'],
        ]);

        $data['uid'] = $formFields['uid'];

        $data['readAccess'] = explode(",", Extras::getAccessList("read", Auth::user()->username));
        // dd($data);   
        return view('user/applicant_tab', $data);
    }

    public function profile(Request $request)
    {
        $data = array();

        $formFields = $request->validate([
            'uid' => ['required'],
        ]);

        $data['uid'] = $formFields['uid'];

        $data['record'] = DB::table('applicants')->where("applicant_id", $data['uid'])->get();
        $data = json_decode($data['record'], true)[0];
        $data['jobsite_select'] = DB::table('jobsites')->get();
        $data['branch_select'] = DB::table('branches')->get();
        $data['country_select'] = DB::table('countries')->get();
        $data['medical_select'] = DB::table('medical')->get();
        $data['principal_select'] = DB::table('principals')->get();
        $data['users_select'] = DB::table('users')->where("user_type", "sales")->get();

        $data['readAccess'] = explode(",", Extras::getAccessList("read", Auth::user()->username));
        $data['editAccess'] = explode(",", Extras::getAccessList("edit", Auth::user()->username));

        return view('user/applicant_profile', $data);
    }

    public function record(Request $request)
    {
        $data = array();

        $formFields = $request->validate([
            'uid' => ['required'],
        ]);

        $data['uid'] = $formFields['uid'];

        $data['record'] = DB::table('applicants')->where("applicant_id", $data['uid'])->get();
        $data = json_decode($data['record'], true)[0];
        $data['country_select'] = DB::table('countries')->get();

        $data['editAccess'] = explode(",", Extras::getAccessList("edit", Auth::user()->username));

        return view('user/applicant_record', $data);
    }

    public function document(Request $request)
    {
        $data = array();

        $formFields = $request->validate([
            'uid' => ['required'],
        ]);

        $data['uid'] = $formFields['uid'];

        $data['record'] = DB::table('applicants')->where("applicant_id", $data['uid'])->get();
        $data = json_decode($data['record'], true)[0];

        $data['editAccess'] = explode(",", Extras::getAccessList("edit", Auth::user()->username));

        return view('user/applicant_document', $data);
    }

    public function oec(Request $request)
    {
        $data = array();

        $formFields = $request->validate([
            'uid' => ['required'],
        ]);

        $data['uid'] = $formFields['uid'];

        $data['record'] = DB::table('applicants')->where("applicant_id", $data['uid'])->get();
        $data = json_decode($data['record'], true)[0];

        $data['readAccess'] = explode(",", Extras::getAccessList("read", Auth::user()->username));
        $data['editAccess'] = explode(",", Extras::getAccessList("edit", Auth::user()->username));

        return view('user/applicant_oec', $data);
    }

    public function store(Request $request)
    {
        $return = array('status' => 0, 'msg' => 'Error', 'title' => 'Error!');
        dd($request->input());
        $formFields = $request->validate([
            'applicant_id' => ['required'],
            'fname' => ['required'],
            'lname' => ['required'],
            'mname' => ['required'],
            'contact' => ['required'],
            'branch' => ['required'],
            'jobsite' => ['required'],
            'sales_manager' => ['required'],
        ]);

        unset($formFields['uid']);
        Applicant::create($formFields);
        $return = array('status' => 1, 'msg' => 'Successfully added applicant', 'title' => 'Success!');

        return response()->json($return);
    }

    public function updateApplicantData(Request $request)
    {
        $return = array('status' => 0, 'msg' => 'Error', 'title' => 'Error!');
        // dd($request->input());
        $applicant_id = $request->input("applicant_id");
        $column = $request->input("column");
        $value = $request->input("value");
        if ($request->hasFile('file')) {
            $users = DB::table('applicants')->where('applicant_id', $applicant_id)->first();
                if ($users->{$column}) {
                    Storage::disk('s3')->delete($users->{$column});
                }
                $value = $request->file('file')->store($column, 's3');
        }

        
        $formFields = array($column => $value);
        $query = DB::table('applicants')->where('applicant_id', $applicant_id)->update($formFields);

        if ($column == "med_first_cost" || $column == "med_second_cost" || $column == "med_third_cost" || $column == "med_fourth_cost" || $column == "cert_nc2_cost") {
            $users = DB::table('applicants')->where('applicant_id', $applicant_id)->first();
            $total_cost = $users->med_first_cost + $users->med_second_cost + $users->med_third_cost + $users->med_fourth_cost + $users->cert_nc2_cost;
            $NewTotalCost = array('total_cost' => $total_cost);
            DB::table('applicants')->where('applicant_id', $applicant_id)->update($NewTotalCost);
        }

        if ($query) {
            $return = array('status' => 1, 'msg' => 'Successfully updated applicant', 'title' => 'Success!');
        }
        
        return response()->json($return);
    }
}
