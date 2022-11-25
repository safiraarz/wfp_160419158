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
});

Route::get('greeting', function () {
    return view('welcome',['name'=>'Safira']);
});

Route::get('myfriend', function () {
    return view('biodata');
});


Route::get('my', function () {
    return view('biodata',['nrp'=>'160419158']);
});

Route::get('myfriend/{nrp}', function ($nrp) {
    return view('biodata',['nrp'=>$nrp]);
});

Route::view('/selamatdatang','welcome');
Route::get('/selamatdatang','Controller@index');
Route::resource('products','ProductsController');
Route::resource('categories','CategoriesController');
Route::resource('users','UserController');
Route::resource('roles','RolesController');
Route::resource('transactions','TransactionController');
Route::resource('suppliers','SupplierController');
Route::post('/products/showInfo','ProductsController@showInfo')->name('products.showInfo');
Route::post('/transactions/showDataAjax','TransactionController@showAjax')->name('transaction.showAjax');
Route::post('/categories/create','CategoriesController@create')->name('category.create');
Route::post('/categories/store','CategoriesController@store')->name('category.store');
Route::post('/products/create','ProductsController@create')->name('products.create');
Route::post('/products/store','ProductsController@store')->name('products.store');
Route::post('/products/showInfo','ProductsController@showInfo')->name('products.showInfo');
Route::post('/categories/showProducts','CategoriesController@showProducts')->name('category.showProducts');
Route::post('/supplier/getEditForm','SupplierController@getEditForm')->name('supplier.getEditForm');
Route::post('/supplier/getEditForm2','SupplierController@getEditForm2')->name('supplier.getEditForm2');
Route::post('/supplier/saveData','SupplierController@saveData')->name('supplier.saveData');
Route::post('/supplier/deleteData','SupplierController@deleteData')->name('supplier.deleteData');
Route::post('/products/getEditForm','ProductsController@getEditForm')->name('product.getEditForm');
Route::post('/products/getEditForm2','ProductsController@getEditForm2')->name('product.getEditForm2');
Route::post('/products/saveData','ProductsController@saveData')->name('product.saveData');
Route::post('/products/deleteData','ProductsController@deleteData')->name('product.deleteData');