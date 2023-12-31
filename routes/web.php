<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;



Route::get('/', function (){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur,..............."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur.............."
        ]
    ];
    return view( 'home', [
        "title" => "Home",
        "posts" => $blog_posts
    ]);
});

Route::get('/about', function () {
    return view( 'about', [
        "title"=> "About"
    ]);
});
Route::get('/tes', function () {
    return view( 'tes', [
        "title"=> "tes"
    ]);
});


Route::get('/contact', function () {
    return view( 'contact', [
        "title"=> "Contact"
    ]);
});

//halaman blog
Route::get('/blog', [PostController::class, 'index']);
//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
    'title' => 'Post Categories',
    'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
    'title' => $category->name,
    'posts' => $category->posts,
    'category' => $category->name
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
    'title' => 'author Posts',
    'posts' => $author->posts,
    ]);
});