<?php

namespace App\Http\Controllers;

use App\Models\Job;
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
        {
            $jobs = auth()->user()->jobs()->get();

            $compact = compact('jobs');

            return view('company.home.index' , $compact);
        }

        elseif(auth()->user()->isAdmin())
        {
            dd("admin");
        }

        elseif(auth()->user()->isCandidate())
        {
            dd("candidate");
        }

        else
        {
            auth()->logout();
            return redirect()->route('login');
        }

    }
}
