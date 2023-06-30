<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PortalController;
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
    return redirect()->route('portal');
});

Route::get('/', [PortalController::class, 'index']);
Route::get('/portal', [PortalController::class, 'index'])->name('portal');



Route::group(['namespace' => 'Auth'], function () {
    // Namespace Auth

    // Route::get('/', function(){
    //     return redirect()->route('auth.login');
    // });

    Route::prefix('login')->group(function () {
        Route::get('/', 'LoginController@index')->name('auth.login');
        Route::post('/processLogin', 'LoginController@processLogin')->name('auth.login.process');

        Route::get('/logout', 'LoginController@logout')->name('auth.logout');
    });

    // Route::prefix('register')->group(function () {
    //     Route::get('/', 'RegisterController@index')->name('auth.register');
    // });

    // Route::prefix('forget')->group(function () {
    //     Route::get('/', 'ForgetController@index')->name('auth.forget');
    // });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function () {
    return redirect()->route('auth.logout');
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

// Others
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:cache');
    $exitCode = Artisan::call('route:cache');
    // $exitCode = Artisan::call('clear-compiled');

    return 'DONE'; //Return anything
});

Route::get('/clear-cache2', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:clear');
    return 'DONE'; //Return anything
});
