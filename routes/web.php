<?php

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

Route::resource('authors', 'AuthorController');

Route::resource('tags', 'TagController');





// Route::get("blog_query", function() {

//     // $post = Author::find(2);
//     // foreach($post->blog as $p){
//     //     var_dump($p->blog_title);die();
//     // }

//     $blog = Blog::find(1);
//     var_dump($blog->author->name);
//     $tags = $blog->tags;
//     foreach($tags as $tag) {
//         var_dump($tag->name);
//     }
//     return "Yay!";
// });

// Route::get("blog_entry" , function() {
//     $faker = Faker\Factory::create();
//     $author = Author::find(1);
//     $tags = Tag::where("4",'<', 4)->get();
//     $blog = Blog::create([
//         'blog_title' => $faker->sentence,
//         'blog_body' => $faker->paragraph,
//         'author_id' => $author->id
//     ]);
//     $blog->tags()->sync($tags);
//     // $blog->save();

// });

// Auth::routes();

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
