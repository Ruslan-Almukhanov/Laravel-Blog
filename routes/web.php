<?php

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


//Home Page Route
Route::get('/', 'HomePageController@homePage' )->name('home');

//Post Routes
Route::prefix('post')->group(function () {
    Route::get('/edit/{id}', 'ManagePostController@editForm')->name('editForm');
    Route::post('/edit/{id}', 'ManagePostController@editPost')->name('editPost');
    Route::get('/delete/{id}', 'ManagePostController@deletePost')->name('deletePost');
    Route::get('/{id}/{slug}', 'PostController@postSingle')->name('singlePost');
    Route::post('/{id}/{slug}', 'CommentController@comment')->name('comment');
    Route::get('/{slug}', 'PostController@postBySlug')->name('postSlug');
    Route::get('/tag/{tag}', 'PostController@postsByTag')->name('postTag');
    Route::get('/category/{category}', 'PostController@postsByCategory')->name('postCategory');
});

//Create Post
Route::get('/create', 'ManagePostController@indexPost')->name('indexPost')->middleware('auth');
Route::post('/create', 'ManagePostController@createPost')->name('createPost');

//About-me Route
Route::get('/about', 'AboutMeController@aboutMe')->name('aboutMe');;

//Registration Routes
Route::get('/registration', 'AuthController@registerForm')->name('registrationForm');
Route::post('/registration', 'AuthController@registerPost')->name('registrationPost');

//Logout
Route::get('/logout', 'AuthController@logout' )->name('logout');

//SignIn Routes
Route::get('/sign-in', 'AuthController@login' )->name('login');
Route::post('/sign-in', 'AuthController@loginPost' )->name('loginPost')->middleware("throttle:3,1");

//Test menu
Route::get('/test/menu', 'MenuController@mainMenu' )->name('menu');


