<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as C;

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
// Route::get('/about', function () {
//     return 'About US';
// });
// Route::get('/contact', function () {
//     return 'Hi I am a contact page';
// });

// Route::get('/posts/{id}/{name}', function ($id, $name) {
//     return "Hi I am an unique $id and $name";
// });

// Route::get('admin/posts/example', array('as' => 'admin.home', function () {
//     $url =  route('admin.home');
//     return "this url is  $url";
// }));


// Route::get('/post/{id}', [C\PostsController::class, 'index']);

Route::resource('/posts', C\PostsController::class);

Route::get('/contact', [C\PostsController::class, "show_my_view"]);

// Route::get('/contact', function () {
//     return view('Contact');
// });
