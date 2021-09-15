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
    return view('welcome');
});
Route::get('/about', function () {
    return 'About US';
});
Route::get('/contact', function () {
    return 'Hi I am a contact page';
});

Route::get('/post/{id}', function () {
    return 'Hi I am an unique ID';
});

Route::get('admin/posts/example', array('as' => 'admin.home', function () {
    $url =  route('admin.home');
    return "this url is  $url";
}));
