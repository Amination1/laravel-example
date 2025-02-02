<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cookie', function () {
    return [$_COOKIE];
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
   return view('jobs', data: [
       'jobs' => [
           [
               'id' => 1,
               'title' => 'Teacher',
               'salary' => '$50,000'
           ],
           [
               'id' => 2,
               'title' => 'Programmer',
               'salary' => '$10,000'
           ],
           [
               'id' => 3,
               'title' => 'Doctor',
               'salary' => '$150,000'
           ]
       ]
   ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Teacher',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$10,000'
        ],
        [
            'id' => 3,
            'title' => 'Doctor',
            'salary' => '$150,000'
        ]
    ];

    $job = Arr::first($jobs, fn($job)=> $job["id"] == $id );

    return view('job', ['job' => $job]);
});
