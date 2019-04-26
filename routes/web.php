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
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@manageaccount')->name('home');
Route::get('/addvendor', 'HomeController@addvendor')->name('home');
Route::get('/profile', 'HomeController@profile')->name('home');



Route::get('/checkout', 'Mlink@checkout');
Route::get('/aftersearch', 'Mlink@aftersearch')->name('aftersearch');
Route::get('/productdetail', 'Mlink@productdetail');
Route::get('/mycart', 'Mlink@mycart');
Route::get('/vendorpage', 'Mlink@vendorpage');
Route::get('/wishlist', 'Mlink@wishlist');
