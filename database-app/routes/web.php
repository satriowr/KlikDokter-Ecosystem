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


// Route::get('/login', function () {
//     return view('login');
// });


Route::get('/', 'AuthController@getLogin');
Route::post('/', 'AuthController@postLogin')->name('login');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/member', function () {
        return view('member');
    });
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/hcp', function () {
        return view('hcp');
    });
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/komunitas', function () {
        return view('komunitas');
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/broadcast', function () {
        return view('broadcast');
    });
    Route::post('/broadcast', 'AuthController@broadcastNomor')->name('broadcastnomor');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/broadcastdb', 'broadcastDBController@index');
    Route::get('/exportdata', 'broadcastDBController@dataExport');
});