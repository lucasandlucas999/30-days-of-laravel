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
    $jobs = Job::all();
    return view('jobs', ['jobs' => $jobs]);
});



Route::get('/jobs/{id}', function($id){
    $job = Job::find($id);
    if(!$job){
        abort(404);
    }
    return view('jobs', ['jobs' => [$job]]);
});

Route::get('/ping', fn() => ['pong' => true]);
