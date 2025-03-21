<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $posts = auth()->user()->usersCoolPosts()->latest()->get();
    // $posts = Post::all();
    $posts = Post::where('user_id', auth()->id())->get();
    return view('home', ['posts'=> $posts]);
});

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);

// Blog post related routes
Route::post('/create-post', [PostController::class, 'createPost']);
