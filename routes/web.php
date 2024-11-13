<?php

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function (HttpRequest $request) {



    // /** @var \Illuminate\Support\Facades\Request $dep */
    // //$dep = app('request');
    // $dep = app()->make('request');


    // /** @var \Illuminate\Routing\Router $router */
    // $router = app()->make('router');

    return view('welcome');


})->name('home');

Route::get('/login', action: fn() => '<h1>Login</h1>')->name('login');
Route::get('/about', action: fn() => '<h1>About</h1>')->name('about');
Route::get('/api', action: function (): JsonResponse {

    return response()->json((array) app());
});
Route::get('/posts/list/{id?}', action: fn(int $id = 1) => "<h1>Post - {$id}</h1>")
->name('post.show');


Route::post('posts', action: fn() => response()->json(["status" => "sasi"]))
->withoutMiddleware(VerifyCsrfToken::class)
->name('post.store');

Route::match(['get', 'post'], '/posts/{id?}', action: fn(int $id = 1) => "<h1>Post - {$id}</h1>")
->name('post.show')
->withoutMiddleware(VerifyCsrfToken::class);

