<?php

use Illuminate\Support\Facades\Route;

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
    
    return view('blog.index');
})->name('inicio');

Route::get('/project', function () {
   
    return view('blog.project');  
})->name('project');

Route::get('/about', function () {
   
    return view('blog.about');  
})->name('about');

Route::get('/components', function () {
   
    return view('blog.components');  
})->name('components');
