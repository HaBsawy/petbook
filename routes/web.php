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
    if(auth()->check()) {
        return view('home_auth');
    } else {
        return view('home');
    }
});

Route::get('lang/{lang}', function ($lang) {
    if(in_array($lang, Config::get('app.locales'))) {
        session(['locale' => $lang]);
    }
    return redirect()->back();
})->middleware('locale')->name('lang');

Route::group(['middleware' => 'guest'], function () {
    Route::post('login', 'UserController@login')->name('login');
    Route::post('register', 'UserController@register')->name('register');
});
