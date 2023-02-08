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
    $blog_posts = [
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

    return view('home',[
        "title" => "Home",
        "posts" => $blog_posts,
    ]);
});

Route::get('/posts/{slug}',function($slug){

    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"]==$slug){
            $new_post = $post;
        }
    }


    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "M Darojatun Hogi",
        "gender" => "male",
    ]);
});
