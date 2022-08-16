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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')
->namespace('Admin')
->group(function(){

    Route::get('/', 'DashboardController@dashboard')->name('dashboard');


    // kriteria
    Route::get('kriteria', 'KriteriaController@index')
    ->name('kriteria');
    Route::post('kriteria/store', 'KriteriaController@store')
    ->name('kriteria.store');
    Route::get('kriteria/destroy/{id}', 'KriteriaController@destroy')
    ->name('kriteria.destroy');
    Route::get('kriteria/edit/{id}', 'KriteriaController@edit')
    ->name('kriteria.edit');
    Route::put('kriteria/update/{id}', 'KriteriaController@update')
    ->name('kriteria.update');
    Route::get('kriter/show/{id}', 'KriteriaController@show')
    ->name('kriteria.show');

    // alternatif
    Route::resource('alternatif', 'AlternatifController');

    // crips
    Route::resource('crips', 'CripsController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
