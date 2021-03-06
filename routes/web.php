<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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




Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

//Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons');
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

//Route::get('/form', function () {
 //   return view('formpeminjaman');
//});

Route::get('/', function () {
    return view('dashpeminjam');
});

Route::get('/panduan', function () {
    return view('panduan');
});

Route::get('/panduanpetugas', function () {
    return view('panduanpetugas');
});


Route::get('/detail/read/{id}', 'SepedaController@read');

Route::get('/listform', 'FormController@indexx');

Route::resource('/form', 'FormController');
Route::resource('/sepeda', 'SepedaController');


Route::get('/form', [FormController::class, 'dropdown']);
Route::get('/getDepartments/{id}', [FormController::class, 'getDepartments']);

Route::get('/submit', function () {
    return view('submitform');
});

Route::get('/konfirmasi', function () {
    return view('konfirmasi');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});
