<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'index'] );

Route::prefix('admin')->group(function(){
    Route::get('/', function(){
        return '<h2>Dashboard</h2>';
    });
    Route::get('/posts', function(){
        return '<h2>Posts</h2>';
    });

    Route::get('/users', function(){
        return '<h2>Users</h2>';
    });

    Route::get('/users/{id}', function($id){
        return "<h2>User $id</h2>";
    });
});

Route::fallback(function(){

 
    abort(404, 'Not Found - Sasi Chma');

    //return response('<h2>404</h2>', 404);
 
});