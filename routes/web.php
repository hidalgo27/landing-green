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

Route::get('/', [
    'uses' => 'Page\HomepageController@index',
    'as' => 'home_path',
]);

//page
Route::get('/septiembre-2020', [
    'uses' => 'Page\HomepageController@agosto_2020',
    'as' => 'agosto_2020_path',
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


//Route::get('/admin/list/lista-alumnos', [
//    'uses' => 'HomeController@lista_alumnos',
//    'as' => 'lista_alumnos_path',
//]);


Route::get('/list-group', [
    'uses' => 'Page\HomepageController@list_group',
    'as' => 'list_group_path',
]);


//page
Route::get('/encuentas/set', [
    'uses' => 'Page\HomepageController@ecuesta_set',
    'as' => 'ecuesta_set_path',
]);
