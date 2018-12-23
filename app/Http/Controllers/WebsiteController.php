<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class WebsiteController extends Controller
{

    public function index()
    {

        $now = Carbon::now();

        $jobs = Job::all();

        $categories = Category::latest()->get();

        $count = 0;

        foreach ($jobs as $job)
        {

            $crt = Carbon::parse($job->created_at);

            if($now->diffInDays($crt , false) == 0 )
            {
                $count++;
            }
        }

        $compact = compact('jobs' , 'count' , 'categories');

        return view('website.index' , $compact);
    }

}
