<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact') ;
});

Route::get('/lucas', function(){
    return view('lucas');
});

Route::get('/jobs', function(){
    return view('jobs', [
        'jobs' => [
            [
                'title'=> 'Laravel Developer',
                'salary' => '$50,000'
            ],
            [
                'title'=> 'Vue Developer',
                'salary' => '$40,000'
            ],
            [
                'title'=> 'React Developer',
                'salary' => '$45,000'
            ]
        ]
    ]);
});
