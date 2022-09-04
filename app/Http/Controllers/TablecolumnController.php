<?php

namespace App\Http\Controllers;

use App\Models\tablecolumn;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TablecolumnController extends Controller
{
    public function getTable()
    {
        $data['result'] = DB::table('setups')->get();

        return view('config/tablecolumn_table', $data);
    }

    public function getModal(Request $request)
    {
        $data = array();

        $formFields = $request->validate([
            'uid' => ['required'],
        ]);

        if ($formFields['uid'] != "add") {
            $data['record'] = DB::table('tablecolumns')->where('id', $formFields['uid'])->get();
            $data = $data['record'][0];
            $data = json_decode(json_encode($data), true);
        }

        $data['uid'] = $formFields['uid'];

        $data['table'] = DB::table('setups')->where('id', $formFields['uid'])->get();

        
        
        $column = DB::select('SHOW COLUMNS FROM `principals`');
        $data['column'] = tablecolumn::processColumnName($column);
        // dd($data);
        return view('config/tablecolumn_modal', $data);
    }

    public function store(Request $request)
    {
        $return = array('status' => 0, 'msg' => 'Error', 'title' => 'Error!');

        $formFields = $request->validate([
            'uid' => ['required'],
            'code' => ['required'],
            'description' => ['required']
        ]);

        if ($formFields['uid'] == "add") {
            unset($formFields['uid']);
            $formFields['created_by'] = Auth::id();
            $formFields['updated_at'] = "";
            tablecolumn::create($formFields);
            $return = array('status' => 1, 'msg' => 'Successfully added table config', 'title' => 'Success!');
        } else {
            $formFields['updated_at'] = Carbon::now();
            $formFields['modified_by'] = Auth::id();
            $id = $formFields['uid'];
            unset($formFields['uid']);
            DB::table('tablecolumns')->where('id', $id)->update($formFields);
            $return = array('status' => 1, 'msg' => 'Successfully updated table config', 'title' => 'Success!');
        }

        return response()->json($return);
    }

}
