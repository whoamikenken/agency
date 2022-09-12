<?php

namespace App\Http\Controllers;

use App\Models\applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

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
        $data['users_select'] = DB::table('users')->where("user_type", "sales")->get();

        return view('user/applicant_profile', $data);
    }

    public function store(Request $request)
    {
        $return = array('status' => 0, 'msg' => 'Error', 'title' => 'Error!');

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
        applicant::create($formFields);
        $return = array('status' => 1, 'msg' => 'Successfully added applicant', 'title' => 'Success!');

        return response()->json($return);
    }
}