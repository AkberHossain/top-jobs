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
        if(auth()->user()->isCompany())
            return view('company.home.index');
        elseif(auth()->user()->isAdmin())
            dd("admin");
        elseif(auth()->user()->isCandidate())
            dd("candidate");
        else
        {
            auth()->logout();
            return redirect()->route('login');
        }


    }
}
