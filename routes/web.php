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
    // return view('welcome');
    // return view('backend.pages.dokter.index');
    return redirect()->route('obat.list');
});

Route::group(['namespace' => 'Backend'], function () {
    Route::group(['namespace' => 'Master'], function () {
        // Namespace Backend/Master

        Route::prefix('dokter')->group(function () {
            Route::get('/list', 'DokterController@index')->name('dokter.list');
            Route::get('/create', 'DokterController@create')->name('dokter.create');
            Route::post('/create', 'DokterController@store')->name('dokter.add');
        });

        Route::prefix('obat')->group(function () {
            Route::post('/data', 'ObatController@getData')->name('obat.data');
            Route::get('/list', 'ObatController@index')->name('obat.list');
            Route::get('/create', 'ObatController@create')->name('obat.create');
            Route::post('/create', 'ObatController@store')->name('obat.add');
            Route::get('/edit/{id}', 'ObatController@edit')->name('obat.edit');
            Route::post('/update', 'ObatController@update')->name('obat.update');
            Route::post('/delete', 'ObatController@destroy')->name('obat.delete');
        });
    });
});

Route::group(['namespace' => 'Auth'], function () {
    // Namespace Auth

    // Route::get('/', function(){
    //     return redirect()->route('auth.login');
    // });

    Route::prefix('login')->group(function () {
        Route::get('/', 'LoginController@index')->name('auth.login');
    });

    Route::prefix('register')->group(function () {
        Route::get('/', 'RegisterController@index')->name('auth.register');
    });

    Route::prefix('forget')->group(function () {
        Route::get('/', 'ForgetController@index')->name('auth.forget');
    });
});
