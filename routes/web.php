<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [PostController::class,'index']);
Route::get('/posts/{post:slug}',[PostController::class,'show']);
// Route::get('/categories',[CategoryController::class,'index']);
Route::get('/categories/{category:slug}',[CategoryController::class,'show']);

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "M Darojatun Hogi",
        "gender" => "male",
    ]);
});

Route::get('/author/{author:username}',[UserController::class,'show']);