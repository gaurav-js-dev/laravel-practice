<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Role;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as C;

// Application routes

// Route::get('/insert', function () {
//     DB::insert('insert into posts(title, content) values(?, ?)', ['Laravel is amazing with Edwin', 'Still React Is the best programming language out there']);
// });


// Route::get('/read', function () {
//     $results = DB::select('select * from posts where id=?', [2]);


//     foreach ($results as $post) {
//         return $post->title;
//     }
// });


// Route::get('/update', function () {
//     $updated = DB::update('update posts set title ="updated title" where id = ?', [1]);
//     return $updated;
// });

// Route::get('/delete', function () {
//     $deleted = DB::delete('delete from posts where id=?', [1]);
//     return $deleted;
// });

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

// Route::get('/contact', function () {
//     return view('Contact');
// });

// Route::get('/post/{id}', [C\PostsController::class, 'index']);

// Route::resource('/posts', C\PostsController::class);



// Route::get('/contact', [C\PostsController::class, "contact"]);

// Route::get('/post/{id}/{name}/{password}', [C\PostsController::class, "show_post"]);


// ORM 



// Route::get('/read', function () {
//     $posts = Post::all();

//     foreach ($posts as $post) {
//         return $post->title;
//     }
// });


// FIND DATA ORM

// Route::get('/find', function () {
//     $post = Post::find(2);
//     return $post->title;
// });


// Route::get('/findwhere', function () {
//     $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();

//     return $posts;
// });
// Route::get('/findmore', function () {
//     // $posts = Post::findOrFail(1);
//     $posts = Post::where('users_count', '<', 50)->firstOrFail();

//     return $posts;
// });


// INSERT ORM 

// Route::get('/basicinsert', function () {
//     $post = new Post;
//     $post->title = "New ORM Title";
//     $post->content = 'wow eloquent is really cool, look at the content';
//     $post->save();
// });

// Update ORM

// Route::get('/basicinsert', function () {

//     $post =  Post::find(5);
//     $post->title = "I am learning now";
//     $post->save();
// });


// Route::get('/basicinsert', function () {

//     $post =  Post::find(5);
//     $post->title = "I am learning now";
//     $post->save();
// });


// MASS ASSIGN IN ONE SHOT ORM

// Route::get('/create', function () {
//     Post::create(['title' => 'the create method', 'content' => 'Wow I am learning backend these days with PHP']);
// });

// ORM Update Method


// Route::get('/update', function () {
//     Post::where('id', 2)->where('is_admin', 0)->update(['title' => 'This is new PHP Title', 'content' => 'PHP IS AN AMAZING BUT OLD TECH']);
// });

// ORM DELETE

// Route::get('/delete', function () {
//     $post = Post::find(6);

//     $post->delete();
// });


// Route::get('delete2', function () {
//     Post::destroy(3, 5);
// });


// Route::get('softdelete', function () {
//     Post::find('9')->delete();
// });

// ORM Read soft delete

// Route::get('/readsoftdelete', function () {
//     // $post = Post::find('7');
//     // return $post;

//     $post = Post::onlyTrashed()->get();
//     return $post;
// });


// Route::get('/restore', function () {

//     $post = Post::withTrashed()->restore();
//     return $post;
// });



// Route::get('forecedelete', function () {
//     Post::find('9')->forceDelete();
// });

// ORM ONE ON ONE

// Route::get('/user/{id}/post', function ($id) {
//     return User::find($id)->post->title;
// });




// Route::get('/user', function () {
//     $users = User::all();
//     foreach ($users as $post) {
//         return $post->id;
//     }
// });


// ORM one to one INVERSE

// Route::get('/post/{id}/user', function ($id) {
//     return Post::find($id)->user->name;
// });




// ORM ONE TO MANY RELATIONSHIPS

// Route::get('/post', function () {
//     $user = User::find(1);

//     foreach ($user->posts as $post) {
//         echo $post->title . "<br>";
//     }
// });

// ORM Many TO MANY RELATIONSHIPS

// Route::get('/user/{id}/role', function ($id) {

//     $user = User::find($id)->roles()->orderby('id', "desc")->get();

//     return $user;

//     // foreach ($user->roles as $role) {
//     //     return $role->name . "<br>";
//     // }
// });


// Accessing the intermediate table/ pivot 

// Route::get("user/pivot", function () {
//     $user = User::find(1);

//     foreach ($user->roles as $role) {
//         echo $role;
//     }
// });

// Polymorphic relations 

// Route::get('user/photos', function () {

//     $user = User::find(1);
//     foreach ($user->photos as $photo) {
//         return $photo->path;
//     }
// });
// Route::get('post/photos', function () {

//     $post = Post::find(1);
//     foreach ($post->photos as $photo) {
//         return $photo->path;
//     }
// });


// Crud Application 

Route::resource('/posts', C\PostsController::class);
