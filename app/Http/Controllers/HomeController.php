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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	if (\Auth::user()->Droitsadmin == 1)
        return view('espaceadmin');
	else
	    return view('espaceutilisat');
        //return view ('home');
    }
}
