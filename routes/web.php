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
    return view('welcome');
});


Route::view('/login', 'Auth.login')->name('login');
Route::view('/signup', 'Auth.register')->name('register');
Route::view('/reset_password', 'Auth.reset-password')->name('reset.password');
Route::view('/forgot_password', 'Auth.forgot-password')->name('forgot.password');
Route::view('/newsfeed', 'newsfeed')->name('newsfeed');
Route::view('/shop', 'shop')->name('shop');
Route::view('/followers', 'follower')->name('followers');
Route::view('/notification', 'notification')->name('notification');
Route::view('/profile', 'profile')->name('profile');
Route::view('/customizer', 'customizer')->name('customizer');
Route::view('/search', 'search')->name('search');
Route::view('/blog', 'blog')->name('blog');
Route::view('/blog-detail', 'blog-detail')->name('blog-detail');
Route::view('/chat', 'chat')->name('chat');
Route::view('/product-detail', 'product-detail')->name('product-detail');
