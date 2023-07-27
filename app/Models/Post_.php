<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
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

    public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();

    
        return $posts->firstWhere('slug', $slug);
    }
    


    // use HasFactory;
}
