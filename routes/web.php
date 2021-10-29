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



Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', function () {
        return view('partials/dashboard');
    });
    
    Route::get('/erd', function () {
        return view('partials/gambar');
    });
    Route::resource('band', 'BandController');
    Route::resource('genre', 'GenreController');

    Route::resource('rate', 'RateController');
    Route::resource('register', 'RegisterController');
});

    Route::resource('music', 'MusicController');
Auth::routes();


    Route::get('/download{new_file}',[MusicController::class, 'download']);

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

  