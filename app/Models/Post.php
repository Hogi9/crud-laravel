<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title"=>"Judul Postingan Pertama",
            "slug"=>"judul-postingan-pertama",
            "author"=>"M Darojatun Hogi",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae alias, laudantium eveniet at reiciendis obcaecati quos, aspernatur blanditiis ducimus provident sit distinctio modi praesentium. Aspernatur, ea suscipit ad eaque sint id assumenda, pariatur, nostrum dicta possimus quod. Ratione totam ullam itaque modi, soluta mollitia earum labore consequuntur numquam inventore assumenda error provident saepe iusto? Amet suscipit, veniam blanditiis error neque eius iste totam facere dolores, minima modi. Fugit eaque maxime est corrupti rem, sint ut quo cumque ad error debitis.",
        ],
        [
            "title"=>"Judul Postingan Kedua",
            "slug"=>"judul-postingan-kedua",
            "author"=>"Arvin Winata",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae alias, laudantium eveniet at reiciendis obcaecati quos, aspernatur blanditiis ducimus provident sit distinctio modi praesentium. Aspernatur, ea suscipit ad eaque sint id assumenda, pariatur, nostrum dicta possimus quod. Ratione totam ullam itaque modi, soluta mollitia earum labore consequuntur numquam inventore assumenda error provident saepe iusto? Amet suscipit, veniam blanditiis error neque eius iste totam facere dolores, minima modi. Fugit eaque maxime est corrupti rem, sint ut quo cumque ad error debitis.",
        ],
    ];
    
    public static function all()
    {
        // * bintang pada video 5
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        // * bintang pada video 5
        $posts = static::all();

        //'slug' merupakan data dari variabel posts
        return $posts->firstWhere('slug',$slug);
    }
}
