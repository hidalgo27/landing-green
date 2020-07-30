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

//Route::get('/', function () {
//    return view('welcome');
//});

//page
Route::get('/', [
    'uses' => 'Page\HomepageController@index',
    'as' => 'home_path',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('form/free', [
    'uses' => 'Page\HomepageController@form_free',
    'as' => 'form_free_path',
]);

Route::post('form/suscripcion', [
    'uses' => 'Page\HomepageController@suscipcion',
    'as' => 'form_suscripcion_path',
]);
