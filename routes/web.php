<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    auth()->logout();
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






//Website Route
Route::get('top-jobs' , 'WebsiteController@index' )->name('show.website');


//Company Routes

route::group(

    [
        'prefix' => 'company' ,
        'namespace' => 'Company'
    ],

    function(){

        //Route job posting

        Route::get('jobs/create','JobController@showJobCreateForm')->name('company.jobs.create');
        Route::post('jobs/create','JobController@storeJobCreateForm')->name('company.jobs.store');

    }

);


//Candidate Route

route::group(

    [
        'prefix' => 'candidate' ,
        'namespace' => 'Candidate' ,
        'middleware' => 'auth'
    ]

    ,

    function(){

        Route::get( 'job/{id}' , 'JobController@showJobDetails' )->name('candidate.show-job-details');
        Route::get( 'job/{id}/apply' , 'JobController@showJobApplyForm' )->name('candidate.show-job-apply-form');
        Route::post( 'job/{id}/apply' , 'JobController@storeJobApplyForm' )->name('candidate.store-job-apply-form');

    });




//auto routes
//will be deleted after the project

Route::get('home/{id}',function($id){

    auth()->loginUsingId($id);

    return redirect()->home();

});