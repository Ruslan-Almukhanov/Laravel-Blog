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
Route::get('/', 'HomePageController@HomePage' );

//Post Routes
Route::prefix('post')->group(function () {
    Route::get('/{slug}', 'PostController@PostBySlug');
    Route::get('/tag/{tag}', 'PostController@PostsByTag');
    Route::get('/category/{category}', 'PostController@PostsByCategory');

});

//About-me Route
Route::get('/about', 'AboutMeController@AboutMe');

//Registration Routes
Route::get('/registration', 'AuthController@SignUp' );
Route::post('/registration', 'AuthController@SignUpCheckData' );

//SignIn Routes
Route::get('/sign-in', 'AuthController@SignIn' );
Route::post('/sign-in', 'AuthController@SignInCheckData' );
