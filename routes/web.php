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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
  // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('task', 'Admin\TaskCrudController');
    CRUD::resource('service', 'Admin\ServiceCrudController');
    CRUD::resource('tcd_article', 'Admin\Tcd_articleCrudController');
    CRUD::resource('tcd_art_categorie', 'Admin\Tcd_art_categorieCrudController');
    CRUD::resource('tcd_car', 'Admin\Tcd_carCrudController');
    CRUD::resource('service_book', 'Admin\ServiceBookCrudController');
  
});
//20161219lim for adminLTE
//CRUD::resource('/admin/task', 'TaskCrudController');//->middleware('auth');
