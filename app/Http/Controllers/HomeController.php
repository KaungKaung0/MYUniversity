<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        session_start();
        $this->middleware('auth');
    }

    public function logout()
    {
        session_destroy();
        session_unset();
        auth()->logout();
        return redirect()->route('login');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('BackEnd/home');
    }
}
