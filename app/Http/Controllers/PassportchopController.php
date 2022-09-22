<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassportchopController extends Controller
{
    //
    public function getTable(Request $request)
    {
        $filter = $request->input();
        
        $where = array();
        if($filter['applicant']) $where[] = array('applicant_id', '=', $filter['applicant']);
        $data['result'] = DB::table('passport_chops')->where($where)->paginate(8);
        return view('passport/passport_table', $data);
    }
}
