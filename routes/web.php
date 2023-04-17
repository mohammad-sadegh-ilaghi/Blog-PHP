<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AuthorizeController;

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

// Home
Route::get('/', function(){ return Inertia::render('Home');});

// contact 
Route::get('/contact',[ContactUsController::class, 'contactUs']);


// Category
Route::get('/categories/list', [CategoryController::class, 'categoties']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::get('/categories/update', [CategoryController::class, 'update']);

// Post
Route::get('/post/create', [PostsController::class, 'create']);
Route::get('/post/update/{id}', [PostsController::class, 'update']);
Route::get('/post/{id}', [PostsController::class, 'post']);
Route::get('/post/posts', [PostsController::class, 'posts']);


// authentication 

Route::controller(AuthorizeController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    // Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});