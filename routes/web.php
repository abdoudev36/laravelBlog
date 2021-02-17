<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CpanelController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;

/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog/post/{slug}', [HomeController::class, 'post'])->name('post');
Route::post('/blog/search', [HomeController::class, 'search'])->name('search-post');
Route::get('/blog/category/{cat}', [HomeController::class, 'searchByCats'])->name('search-post-by-cats');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::get('/auth/login', [AuthController::class, 'loginPage'])->name('login');
/*
Route::post('/user/login', [AuthController::class, 'login'])->name('login');

Route::get('/user/signup', [AuthController::class, 'signupPage'])->name('signup');
Route::post('/user/signup', [AuthController::class, 'create'])->name('signup');
*/

Route::put('/auth/update', [AuthController::class, 'update'])->name('user-update');

Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Socialite Routes
|--------------------------------------------------------------------------
*/
Route::get('/auth/google', [SocialiteController::class, 'redirectToProvider'])->name('google-login');
Route::get('/auth/google/redirect', [SocialiteController::class, 'handleProviderCallback'])->name('handleProviderCallback');

/*
|--------------------------------------------------------------------------
| Cpanel Routes
|--------------------------------------------------------------------------
*/
$url = '/abdev/admin';
Route::get($url, [CpanelController::class, 'index'])->name('cpanel');
Route::get($url.'/create', [CpanelController::class, 'create'])->name('cpanel-create');
Route::get($url.'/posts', [CpanelController::class, 'posts'])->name('cpanel-posts');
Route::get($url.'/categories', [CpanelController::class, 'categories'])->name('cpanel-categories');
Route::get($url.'/comments', [CpanelController::class, 'comments'])->name('cpanel-comments');
Route::get($url.'/messages', [CpanelController::class, 'messages'])->name('cpanel-messages');
Route::get($url.'/profile', [CpanelController::class, 'profile'])->name('cpanel-profile');
// Route::get($url.'/profile/update', [CpanelController::class, 'updateProfile'])->name('cpanel-profile-update');

/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------
*/
Route::post($url.'/posts/create', [PostsController::class, 'create'])->name('cpanel-posts-create');
Route::delete($url.'/posts/delete/{id}', [PostsController::class, 'destroy'])->name('cpanel-posts-delete');
Route::get($url.'/posts/update/{id}', [PostsController::class, 'updatePage'])->name('cpanel-posts-update');
Route::put($url.'/posts/update/{id}', [PostsController::class, 'update'])->name('cpanel-posts-update');

/*
|--------------------------------------------------------------------------
| Categories Routes
|--------------------------------------------------------------------------
*/
Route::post($url.'/categories/create', [CategoriesController::class, 'create'])->name('cpanel-categories-create');
Route::get($url.'/categories/update/{id}', [CategoriesController::class, 'updatePage'])->name('cpanel-categories-update');
Route::put($url.'/categories/update/{id}', [CategoriesController::class, 'update'])->name('cpanel-categories-update');
Route::delete($url.'/categories/delete/{id}', [CategoriesController::class, 'destroy'])->name('cpanel-categories-delete');

