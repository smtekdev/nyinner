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

Route::get('/home', function () {
    return view('index');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/graphic-design', function () {
    return view('graphic-design');
});
Route::get('/web-designing', function () {
    return view('web-designing');
});
Route::get('/3d-art', function () {
    return view('3d-art');
});
Route::get('/social-media-marketing', function () {
    return view('social-media-marketing');
});
Route::get('/search-engine-optimization', function () {
    return view('search-engine-optimization');
});
Route::get('/post-production', function () {
    return view('post-production');
});
Route::get('/contact', function () {
    return view('contact');
});