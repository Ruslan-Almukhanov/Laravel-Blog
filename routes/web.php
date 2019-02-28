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
    Route::get('/{slug}', 'PostController@postBySlug')->name('postSlug');
    Route::get('/tag/{tag}', 'PostController@postsByTag')->name('postTag');
    Route::get('/category/{category}', 'PostController@postsByCategory')->name('postCategory');
});

//Create Post
Route::get('/create', 'ManagePostController@indexPost')->name('indexPost');
Route::post('/create', 'ManagePostController@createPost')->name('createPost');

//About-me Route
Route::get('/about', 'AboutMeController@aboutMe')->name('aboutMe');;

//Registration Routes
Route::get('/registration', 'AuthController@signUp')->name('signUpPage');
Route::post('/registration', 'AuthController@signUpCheckData')->name('signUpPost');

//SignIn Routes
Route::get('/sign-in', 'AuthController@signIn' )->name('signIpPage');
Route::post('/sign-in', 'AuthController@signInCheckData' )->name('signInPost');

//Test menu
Route::get('/test/menu', 'MenuController@mainMenu' )->name('menu');

