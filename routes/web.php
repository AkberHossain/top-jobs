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

//auto routes
//will be deleted after the project

Route::get('home/{id}',function($id){

    auth()->loginUsingId($id);

    return redirect()->home();

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



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