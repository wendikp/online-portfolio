<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Ini route untuk masuk ke halaman utama
Route::get('/', function () {
	$cekSesi = Auth::check();
    return view('index', ['cekSesi' => $cekSesi]);
});
// Route untuk menampilkan halaman login admin
Route::get('/form_login', 'PortfolioController@showLoginPage');
Route::get('/portfolio-1', 'PortfolioController@showPortfolio1');
Route::get('/portfolio-2', 'PortfolioController@showPortfolio2');
Route::get('/portfolio-3', 'PortfolioController@showPortfolio3');
Route::get('/sendEmail','EmailController@index');
// Route untuk menampilkan waktu berjalan pada halaman login
Route::get('/time', 'PortfolioController@showTime');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
