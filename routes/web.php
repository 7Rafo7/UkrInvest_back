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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['name' => 'front'],function (){

});

//admin
Route::group(['name' => 'admin_login'],function (){
    require_once (__DIR__.'\admin\login.php');
});

Route::group(['name' => 'admin','prefix' => 'admin'],function (){
});
