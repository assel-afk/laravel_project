<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('index');
})->name('index');
Route::get('/shop', function () {
  return view('basic_page.shop');
})->name('shop');
Route::get('/mybank', function () {
  return view('basic_page.mybank');
})->name('mybank');
Route::get('/services', function () {
  return view('basic_page.services');
})->name('services');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/index', 'MController@index')->name('admin.index');
Route::get('/index/create', 'MController@create')->name('admin.create');
Route::post('/index', 'MController@store')->name('admin.store');
Route::get('/index/{id}/edit', 'MController@edit')->name('admin.edit');
Route::post('/index/{id}/update', 'MController@update')->name('admin.update');
Route::get('/index/{id}/show', 'MController@show')->name('admin.show');
Route::post('/index/{id}/destroy', 'MController@destroy')->name('admin.destroy');


/*Route::group(['middleware' => ['status','auth']], function(){
$data = [
'namespace' => 'RoleControllers\Admin',
'prefix' => 'admin',
];
Route::group($data, function(){
Route::get('/index', 'MainController@index')->name('admin.index');
Route::get('/index/create', 'MainController@create')->name('admin.create');
Route::post('/index', 'MainController@store')->name('admin.store');
Route::get('/index/{id}/edit', 'MainController@edit')->name('admin.edit');
Route::put('/index/{id}', 'MainController@update')->name('admin.update');
Route::delete('/index/{id}', 'MainController@destroy')->name('admin.destroy');
Route::get('/index/{id}', 'MainController@show')->name('admin.show');
Route::resource('index','MainController')->names('admin');;
});
});*/
