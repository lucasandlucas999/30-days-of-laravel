<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
        'jobs' => [
            [
                'id' => 1,
                'title'=> 'Laravel Developer',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title'=> 'Vue Developer',
                'salary' => '$40,000'
            ],
            [
                'id' => 3,
                'title'=> 'React Developer',
                'salary' => '$45,000'
            ]
        ]
    ]);
});



Route::get('/jobs/{id}', function($id){
    $jobs = [
                [
                'id' => 1,
                'title'=> 'Laravel Developer',
                'salary' => '$50,000'
                ],
                [
                    'id' => 2,
                    'title'=> 'Vue Developer',
                    'salary' => '$40,000'
                ],
                [
                    'id' => 3,
                    'title'=> 'React Developer',
                    'salary' => '$45,000'
                ]
                ];

    $job = Arr::first($jobs, fn($job) => $job['id']==$id);
    // dd($job);
    return view('job', ['job' => $job]);

});
