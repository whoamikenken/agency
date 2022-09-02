<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(Request $request){
        return view('home');
    }

    public function validateLogin(Request $request){
        dd($request->all());
        dd($request->input());
    }

    // Store New Users
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email',Rule::unique('users', 'email')],
            'fname' => ['required'],
            'lname' => ['required'],
            'password' => ['required, confirmed, min:6']
        ]);

        // HASH
        $formFields['password'] = bcrypt($formFields['password']);

        // create user
        $user = User::create($formFields);

        auth()->login($user);

        return "sucess";
        dd($request->input());
    }

}
