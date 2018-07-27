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

Route::get("/login","LoginController@login")->name("login");
Route::post("/login","LoginController@makeLogin")->name("makeLogin");
Route::post("/logout","LoginController@logout")->name("logout");

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});

