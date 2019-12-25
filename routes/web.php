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

Route::get('/', function () {
    // print_r(\Auth::user());die;
    // return view('pages.spreadsheet_demo');
    // return view('admin.pages.user_management');
    return view('pages.home');
});


Route::get('/lessons', function () {
    return view('pages.lesson');
    // return view('pages.spreadsheet_demo');
});


Route::get('/spreadsheet_demo', function () {
    // return view('pages.lesson');
    return view('pages.spreadsheet_demo');
});


Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/contact', function () {
    return view('pages.contact');
});


Route::get('auth/facebook', 'Auth\RegisterController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleFacebookCallback');


Route::get('auth/google', 'Auth\RegisterController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\RegisterController@handleGoogleCallback');


Route::get('auth/linkedin', 'Auth\RegisterController@redirectToLinkedin');
Route::get('auth/linkedin/callback', 'Auth\RegisterController@handleLinkedinCallback');


Route::group(['prefix' => '/admin'], function () {

    Route::get('/', function() {
        return view('admin.pages.user_management');
    });

    Route::get('/user', function() {
        return view('admin.pages.user_management');
    })->name('admin.user');

    Route::get('/order', function() {
        return view('admin.pages.order_management');
    })->name('admin.order');


    Route::get('/lesson', function() {
        return view('admin.pages.lesson_management');
    })->name('admin.lesson');

    Route::get('/lesson/add', function() {
        return view('admin.pages.add_lesson');
    })->name('admin.lesson.add');


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/userprofile', 'Auth\RegisterController@userProfile')->name('userprofile');


