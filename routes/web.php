<?php

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

Route::get('/blog', function (){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi illo nemo! Reprehenderit repellendus rem, accusantium dolores, tempora quod delectus illum cum quam totam provident laborum id officia consequuntur cupiditate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi illo nemo! Reprehenderit repellendus rem, accusantium dolores, tempora quod delectus illum cum quam totam provident laborum id officia consequuntur cupiditate."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi illo nemo! Reprehenderit repellendus rem, accusantium dolores, tempora quod delectus illum cum quam totam provident laborum id officia consequuntur cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi illo nemo! Reprehenderit repellendus rem, accusantium dolores, tempora quod delectus illum cum quam totam provident laborum id officia consequuntur cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi illo nemo! Reprehenderit repellendus rem, accusantium dolores, tempora quod delectus illum cum quam totam provident laborum id officia consequuntur cupiditate."
        ]
    ]; 
    return view( 'blog', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('/contact', function () {
    return view( 'contact', [
        "title"=> "Contact"
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi illo nemo! Reprehenderit repellendus rem, accusantium dolores, tempora quod delectus illum cum quam totam provident laborum id officia consequuntur cupiditate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi illo nemo! Reprehenderit repellendus rem, accusantium dolores, tempora quod delectus illum cum quam totam provident laborum id officia consequuntur cupiditate."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi illo nemo! Reprehenderit repellendus rem, accusantium dolores, tempora quod delectus illum cum quam totam provident laborum id officia consequuntur cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi illo nemo! Reprehenderit repellendus rem, accusantium dolores, tempora quod delectus illum cum quam totam provident laborum id officia consequuntur cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi illo nemo! Reprehenderit repellendus rem, accusantium dolores, tempora quod delectus illum cum quam totam provident laborum id officia consequuntur cupiditate."
        ]
    ]; 

    $new_post = [];
    foreach($blog_posts as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

