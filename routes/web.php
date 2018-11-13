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

Route::group(['middleware' => 'auth'], function () {
	//    Route::get('/link1', function ()    {
	//        // Uses Auth Middleware
	//    });

	//Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
	#adminlte_routes
});

Route::get('/shop', 'ProductsController@showProducts');

Route::get('/start', 'ProductsController@startProducts');

Route::get('/add', function () {
	return view('add');
});
Route::post('/addProduct', [
	'as' => 'addProduct',
	'uses' => 'ProductsController@addProduct',
]);
Route::get('/product/{id_product}', 'ProductsController@productDetails');