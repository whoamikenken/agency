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
            'reportName' => ['required'],
        ]);

        $data['tag'] = $formFields['tag'];
        $data['reportName'] = $formFields['reportName'];

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

        $data['applicant_select'] = DB::table('applicants')->where("isactive", "Active")->get();
        $data['branch_select'] = DB::table('branches')->get();
        $data['jobsite_select'] = DB::table('jobsites')->get();
        $data['users_select'] = DB::table('users')->where("user_type", "sales")->get();
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
        unset($whereFilter['edata']);
        unset($whereFilter['edatalist']);
        unset($whereFilter['reportName']);

        $data['reportName'] = $formFields['reportName'];
        $table = "";
        $where = array();
        
        if($formFields['tag'] == "hrreport"){
            foreach ($whereFilter as $key => $value) {
                if($value){
                    $where[] = array($key, '=', $value);
                }
            }

            $data['dateof'] = "As of " .date("F j, Y");


            $table = "applicants";
            $columnList = $formFields['edatalist'];
            $getColumn = explode(",", $columnList);
            foreach ($getColumn as $key => $value) {
                $data['edatalist'][$value] = Extras::showDesc($value);
            }
            if ($table) {
                $data['result'] = DB::table($table)->where($where)->get();
            }
            foreach ($data['result'] as $key => $value) {
                if (isset($data['result'][$key]->sales_manager)) $data['result'][$key]->sales_manager = DB::table('users')->where('id', $value->sales_manager)->value('name');
                if (isset($data['result'][$key]->jobsite)) $data['result'][$key]->jobsite = DB::table('jobsites')->where('code', $value->jobsite)->value('description');
                if (isset($data['result'][$key]->branch)) $data['result'][$key]->branch = DB::table('branches')->where('code', $value->branch)->value('description');
                if (isset($data['result'][$key]->user_profile_face)) $data['result'][$key]->user_profile_face = Storage::disk('s3')->url($value->user_profile_face);
                if (isset($data['result'][$key]->user_profile)) $data['result'][$key]->user_profile = Storage::disk('s3')->url($value->user_profile);
            }

            // dd($data);
            return response()->view('report/masterlistPDF', $data, 200)->header('Content-Type', 'application/pdf');
        }elseif($formFields['tag'] == "departure"){
            $between = array();
            foreach ($whereFilter as $key => $value) {
                if($key == "from" || $key == "to"){
                    $between[] = $value;
                }else {
                    if ($value) {
                        $where[] = array($key, '=', $value);
                    }
                }
                
            }

            $data['dateof'] = "From ". $between[0]." to ". $between[1];

            $table = "applicants";
            DB::enableQueryLog();
            if ($table) {
                $data['result'] = DB::table($table)->where($where)->whereBetween("oec_flight_departure", $between)->orderBy('oec_flight_departure', 'desc')->get();
            }
            $data['edatalist']['fullname'] = Extras::showDesc('fullname');
            $data['edatalist']['applicant_id'] = Extras::showDesc('applicant_id');
            $data['edatalist']['oec_flight_departure'] = Extras::showDesc('oec_flight_departure');

            foreach ($data['result'] as $key => $value) {
                if (isset($data['result'][$key]->sales_manager)) $data['result'][$key]->sales_manager = DB::table('users')->where('id', $value->sales_manager)->value('name');
                if (isset($data['result'][$key]->jobsite)) $data['result'][$key]->jobsite = DB::table('jobsites')->where('code', $value->jobsite)->value('description');
                if (isset($data['result'][$key]->branch)) $data['result'][$key]->branch = DB::table('branches')->where('code', $value->branch)->value('description');
                if (isset($data['result'][$key]->user_profile_face)) $data['result'][$key]->user_profile_face = Storage::disk('s3')->url($value->user_profile_face);
                if (isset($data['result'][$key]->user_profile)) $data['result'][$key]->user_profile = Storage::disk('s3')->url($value->user_profile);
            }
            // dd(DB::getQueryLog());
            return response()->view('report/departurelistPDF', $data, 200)->header('Content-Type', 'application/pdf');
        }
        
    }



}
