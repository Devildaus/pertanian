<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;




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
Route::get('posts/{slug}', [PostController::class, 'show']);

