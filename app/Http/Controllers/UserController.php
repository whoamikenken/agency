<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class UserController extends Controller
{

    public function validateLogin(Request $request)
    {
        $return = array('status' => 0, 'msg' => 'Error', 'title' => 'Error!');
        $formFields = $request->validate([
            'username' => ['required'],
            'password' => ['required',]
        ]);

        $users = DB::table('users')->where('username', $formFields['username'])->first();
        // dd($users->status);
        if (!isset($users->status)) {
            $return = array('status' => 0, 'msg' => 'Account not found please signup.', 'title' => 'Warning!');
        } else if ($users->status == "verified") {
            if (auth()->attempt($formFields)) {
                $request->session()->regenerate();
                $return = array('status' => 1, 'msg' => 'Successfully log in.', 'title' => 'Success!');
            } else {
                $return = array('status' => 0, 'msg' => 'Username or password is wrong.', 'title' => 'Error!');
            }
        } else {
            $return = array('status' => 2, 'msg' => 'Your account is not yet validated by the admin please contact the admin.', 'title' => 'Warning!');
        }

        return response()->json($return);
    }

    // Store Register New Users
    public function register(Request $request)
    {
        $return = array('status' => 0, 'msg' => 'Error', 'title' => 'Error!');
        $formFields = $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'fname' => ['required'],
            'lname' => ['required'],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        // HASH
        $formFields['password'] = bcrypt($formFields['password']);
        $formFields['name'] = $formFields['fname'] . " " . $formFields['lname'];
        $formFields['user_type'] = 'sales';

        // create user
        $user = User::create($formFields);

        $return = array('status' => 1, 'msg' => 'Success please wait for the admin to verify your account.', 'title' => 'Success!');

        return response()->json($return);
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function index()
    {
        // dd(Auth::user()->user_image);
        // auth()->logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        $data['menus'] = DB::table('menus')->get();
        // dd($users);
        return view('user/user', $data);
    }

    public function getTable()
    {
        $data['result'] = DB::table('users')->get();

        // get user creator
        foreach ($data['result'] as $key => $value) {

            // $data['result'][$key]->modified_by = DB::table('users')->where('id', $value->modified_by)->value('name');
            // $data['result'][$key]->created_by = DB::table('users')->where('id', $value->created_by)->value('name');
        }

        return view('user/user_table', $data);
    }

    public function getModal(Request $request)
    {
        $data = array();

        $formFields = $request->validate([
            'uid' => ['required'],
        ]);

        if ($formFields['uid'] != "add") {
            $data['record'] = DB::table('users')->where('id', $formFields['uid'])->get();
            $data = $data['record'][0];
            $data = json_decode(json_encode($data), true);
        }

        $data['uid'] = $formFields['uid'];

        $data['usertype_select'] = DB::table('usertype')->get();

        // dd($data);
        return view('user/user_modal', $data);
    }

    public function store(Request $request)
    {
        $return = array('status' => 0, 'msg' => 'Error', 'title' => 'Error!');

        $formFields = $request->validate([
            'uid' => ['required'],
            'username' => ['required'],
            'fname' => ['required'],
            'lname' => ['required'],
            'status' => ['required'],
            'user_type' => ['required'],
            'email' => ['required']
        ]);
        
        if($formFields['password'] === null){
            unset($formFields['password']);
        }

        $formFields['name'] = $formFields['fname']." ".$formFields['lname'];
        // dd($formFields);
        if ($formFields['uid'] == "add") {
            unset($formFields['uid']);
            $formFields['updated_at'] = "";

            if ($request->hasFile('user_image')) {
                $formFields['user_image'] = $request->file('user_image')->store('user_image', 's3');
            }

            User::create($formFields);
            $return = array('status' => 1, 'msg' => 'Successfully added user', 'title' => 'Success!');
        } else {
            $formFields['updated_at'] = Carbon::now();
            $id = $formFields['uid'];
            unset($formFields['uid']);

            if ($request->hasFile('user_image')) {
                $users = DB::table('users')->where('id', $id)->first();
                if ($users->user_image) {
                    Storage::disk('s3')->delete($users->user_image);
                }
                $formFields['user_image'] = $request->file('user_image')->store('user_image', 's3');
            }
            
            DB::table('users')->where('id', $id)->update($formFields);
            $return = array('status' => 1, 'msg' => 'Successfully updated user', 'title' => 'Success!');
        }

        return response()->json($return);
    }

    public function delete(Request $request)
    {
        $return = array('status' => 0, 'msg' => 'Error', 'title' => 'Error!');

        $formFields = $request->validate([
            'code' => ['required']
        ]);

        $delete = DB::table('users')->where('id', '=', $formFields['code'])->delete();

        if ($delete) {
            $return = array('status' => 1, 'msg' => 'Successfully deleted user', 'title' => 'Success!');
        }

        return response()->json($return);
    }
}
