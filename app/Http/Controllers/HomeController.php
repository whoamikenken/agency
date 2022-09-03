<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(Auth::user()->user_image);
        // auth()->logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        $data['menus'] = DB::table('menus')->get();
        // dd($users);
        return view('home', $data);
    }
}
