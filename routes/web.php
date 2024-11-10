<?php


use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {


    /** @var \Illuminate\Support\Facades\Request $dep */


    //$dep = app('request');
    $dep = app()->make('request');


    /** @var \Illuminate\Routing\Router $router */
    $router = app()->make('router');
   
    return view('welcome', ['dep' => $dep, 'router' => $router]);


})->name('home');

Route::get('/login', action: fn() => '<h2>Login</h2>')->name('login');


Route::get('/about', action: fn() => '<h2>About</h2>')->name('about');

Route::get('/api', action: function (): JsonResponse {

    return response()->json((array) app());
});
