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
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'master', 'middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('/', function () {
        return view('superadmin.index');
    });
    Route::resource('user', 'AkunController');
});
Route::group(['prefix' => 'gudang', 'middleware' => ['auth', 'role:gudang']], function () {
    Route::get('/', function () {
        return view('gudang.index');
    });
});
Route::group(['prefix' => 'penjualan', 'middleware' => ['auth', 'role:penjualan']], function () {
    Route::get('/', function () {
        return view('penjualan.index');
    });
});
Route::group(['prefix' => 'cs', 'middleware' => ['auth', 'role:cs']], function () {
    Route::get('/', function () {
        return view('cs.index');
    });
});
