<?php

namespace App\Http\Controllers;

use App\Models\Extras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReportsController extends Controller
{
    //
    public function getModalFilter(Request $request)
    {
        $data = array();

        $formFields = $request->validate([
            'tag' => ['required'],
        ]);

        $data['tag'] = $formFields['tag'];

        $column = array();
        $showColumn = "";
        if($data['tag'] == "hrreport"){
            $column = array();
            $showColumn .= Extras::returnApplicantCols("General Information");
            $showColumn .= Extras::returnApplicantCols("Medical Record");
            $showColumn .= Extras::returnApplicantCols("Vaccination");
            $showColumn .= Extras::returnApplicantCols("OEC");
            $showColumn .= Extras::returnApplicantCols("Passport");
            $showColumn .= Extras::returnApplicantCols("Bio Status");
            $showColumn .= Extras::returnApplicantCols("Certificate");
            $showColumn .= Extras::returnApplicantCols("VISA");
            $showColumn .= Extras::returnApplicantCols("Job Order");
            
            $data['showColumn'] = $showColumn;
        }
        // dd($showColumn);
        return view('report/report_filter_modal', $data);
    }

    public function generateReport(Request $request)
    {
        $data = array();

        $formFields = $request->input();

        $whereFilter = $formFields;
        unset($whereFilter['_token']);
        unset($whereFilter['tag']);

        $table = "";
        $where = array();

        if($formFields['tag'] == "hrreport"){
            foreach ($whereFilter as $key => $value) {
                if($value){
                    $where[] = array($key, '=', $value);
                }
            }
            $table = "applicants";
        }

        if($table){
            $data['result'] = DB::table($table)->where($where)->get();
        }

        foreach ($data['result'] as $key => $value) {
            if(isset($data['result'][$key]->sales_manager)) $data['result'][$key]->sales_manager = DB::table('users')->where('id', $value->sales_manager)->value('name');
            if(isset($data['result'][$key]->jobsite)) $data['result'][$key]->jobsite = DB::table('jobsites')->where('code', $value->jobsite)->value('description');
            if(isset($data['result'][$key]->branch)) $data['result'][$key]->branch = DB::table('branches')->where('code', $value->branch)->value('description');
            if(isset($data['result'][$key]->user_profile_face)) $data['result'][$key]->user_profile_face = Storage::disk('s3')->url($value->user_profile_face);
        }

        // dd($data);
        return response()->view('report/masterlistPDF', $data, 200)->header('Content-Type', 'application/pdf');
    }



}
