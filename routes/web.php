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
})->middleware('locale');


Route::group(['prefix' => 'docs','middleware' => 'locale'], function () {
    Route::get('/', function () {
        return view('docs');
    })->name('docs');
    Route::get('change-language/{language}', 'HomeController@changeLanguage')
        ->name('docs.change-language');
});