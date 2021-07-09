<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/react',function(){
	return view('react');
});

Auth::routes();
Route::middleware('auth')->group(function(){
	Route::get('/tweets', 'TweetsController@index')->name('home');
	Route::post('/tweets','TweetsController@store')->name('tweets.store');
	Route::delete('/tweets/{tweet}', 'TweetsController@delete')->name('tweets.delete');
	Route::get('/profile/{user}','ProfilesController@show')->name('profile.show');
	Route::post('/profile/follow/{user}','FollowController@store');
	Route::get('/profile/{user}/edit','ProfilesController@edit')->name('profile.edit');
	Route::patch('/profile/{user}','ProfilesController@update')->name('profile.update');
	Route::get('/explore','ExploreController@index')->name('explore');
	Route::post('/tweets/{tweet}/like','LikesController@store');
	Route::delete('/tweets/{tweet}/like','LikesController@destroy');
	Route::get('/notifications','TweetsController@notifications')->name('notifications');
}
);


