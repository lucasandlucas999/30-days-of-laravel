<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function(){
    return view('contact') ;
});

Route::get('/lucas', function(){
    return view('lucas');
});

Route::get('/jobs', function(){
    return view('jobs', [
        "jobs" => Job::all()
    ]);
});



Route::get('/jobs/{id}', function($id){
    return view('job', ['job' => Job::find($id)]);

});
