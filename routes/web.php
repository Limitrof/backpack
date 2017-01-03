<?php

use App\Models\Service;

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
Route::get('/works', function () {
 // $brands = new Brand;// - ����� ���� ������ ������ �����  Task::orderBy('created_at', 'asc')->get();
  //$tasks = Task::orderBy('created_at', 'asc')->get();
$worktypes= Service::find(1)->get();
  return view('worktypes')->with(['worktypes'=>$worktypes]); /*view('tasks', [
    'tasks' => $tasks
  ]);*/
});

Route::get('organizations', 'OrganizationController@index');
Route::get('organization/{id}',  ['uses' => 'OrganizationController@getbyid']);
Route::get('brands', 'BrandController@index'/*function () {

$brands= Brand::find(4)->get();
  return view('brand')->with(['brands'=>$brands]);
}*/);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
  // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('user', 'Admin\UserCrudController');
    CRUD::resource('task', 'Admin\TaskCrudController');
    CRUD::resource('service', 'Admin\ServiceCrudController');
    CRUD::resource('tcd_article', 'Admin\Tcd_articleCrudController');
    CRUD::resource('tcd_art_categorie', 'Admin\Tcd_art_categorieCrudController');
    CRUD::resource('tcd_car', 'Admin\Tcd_carCrudController');
    CRUD::resource('service_book', 'Admin\ServiceBookCrudController');
    CRUD::resource('brand', 'Admin\BrandCrudController');
    CRUD::resource('organization', 'Admin\OrganizationCrudController');
    CRUD::resource('occupation', 'Admin\OccupationCrudController');
    CRUD::resource('organizationoccupation', 'Admin\OrganizationoccupationCrudController');
    CRUD::resource('order', 'Admin\OrderCrudController');
    CRUD::resource('role', 'Admin\RoleCrudController');
    CRUD::resource('userrole', 'Admin\UserroleCrudController');

});
//20161219lim for adminLTE
//CRUD::resource('/admin/task', 'TaskCrudController');//->middleware('auth');
