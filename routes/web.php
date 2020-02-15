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

use App\User;

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


Route::post('/contactus','ContactUs@sendContact')->name('contactus');

Route::post('/save_spreadsheet','UserLesson@saveTempUserLesson')->name('save_spreadsheet');


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

/**
 * Code for login and Register Route
 */
Auth::routes();


Route::group(['middleware' => 'auth'], function () {

    /*Route::get('/change-password', function () {

        $user_id = \Auth::user()->id;

        if(User::getUserProvider($user_id) == 'normal'){
            return view('pages.changepassword');
        } else {
            return Redirect::to('/'); 
        }

    });*/


    /**
     * Pages for normal logged in users
     */

    Route::post('/change-password','UserProfile@changePassword')->name('changePassword');

    Route::get('/user-profile', function() {
        $user = \Auth::user();
        return view('pages.user-profile', compact('user'));
    });

    //Route::post('/edit-profile','UserProfile@updateuser')->name('editprofile');

    Route::patch('userprofile/{user}/updateuser',  ['as' => 'userprofile.update', 'uses' => 'UserProfile@updateuser']);

});

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/userprofile', 'Auth\RegisterController@userProfile')->name('userprofile');


