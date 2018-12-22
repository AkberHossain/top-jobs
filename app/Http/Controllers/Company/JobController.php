<?php

namespace App\Http\Controllers\Company;

use App\Models\Career_Level;
use App\Models\Experience;
use App\Models\Industry;
use App\Models\Job;
use App\Models\Category;
use App\Models\Job_Type;
use App\Models\Qualification;
use App\Models\Salary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function showJobCreateForm()
    {
        $job_types  = Job_Type::all();
        $categories  = Category::all();
        $salaries  = Salary::all();
        $career_levels  = Career_Level::all();
        $experiences  = Experience::all();
        $industries  = Industry::all();
        $qualifications  = Qualification::all();

        $compacts = compact('job_types' , 'categories' , 'industries' , 'salaries', 'career_levels' , 'experiences' , 'qualifications');

        return view('company.jobs.create' , $compacts );
    }

    public function storeJobCreateForm(Request $request)
    {

        //dd($request->all());

        Job::Create(

            [
                'user_id'  => auth()->user()->id ,
                'title' => $request->title ,
                'location' => $request->location ,
                'job_type_id' => $request->job_type ,
                'gender' => $request->gender ,
                'description' => $request->description ,
                'application_email_or_url' => $request->application_email_or_url ,
                'issue_date' =>  date('Y-m-d')
            ]

        );
    }
}
