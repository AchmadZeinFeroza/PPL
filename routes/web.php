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

// Route::group(['middleware' => ['web', 'auth', 'roles']],function(){
//     Route::group(['roles'=>'Pabrik'],function(){
        Route::resource('/', 'BerandaController');
        Route::get('/live_search/ajax' , 'c_permintaan@search')->name('search');

    // });
    // Route::group(['roles'=>'Admin'],function(){
        Route::get('/admin', 'AdminController@index');
        Route::resource('/dataLahan', 'c_lahan'); 
        Route::resource('/dataPabrik', 'c_pabrik');   
        Route::resource('/dataPermintaan', 'c_permintaan'); 
        Route::resource('/dataIdentifikasi', 'c_identifikasi');
//     });
// });  
Route::get('logout' , 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
