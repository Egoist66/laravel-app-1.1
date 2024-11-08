<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});

Route::get('/about', fn(Request $request) => dump($request->getMethod()));

Route::get('/api', fn() => Response::json([
    [
        'name' => 'John Doe',
        'age' => 30,
        'city' => 'New York',

    ],
    [
        'name' => 'Jane Doe',
        'age' => 25,
        'city' => 'London',
    ]
]));