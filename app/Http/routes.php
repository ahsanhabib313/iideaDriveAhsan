<?php

Route::get('/', [
	'as'   => 'index',
	'uses' => 'IndexController@showIndex',
]);
Route::get('/cart', [
	'as'   => 'cart',
	'uses' => 'CartController@showCart',
]);
Route::get('/menu', [
	'as'   => 'menu',
	'uses' => 'MenuController@showMenu',
]);
Route::get('/clientLogin', [
	'as'   => 'clientLogin',
	'uses' => 'ClientLoginController@showClientLogin',
]);
Route::get('/orderConfirmation', [
	'as'   => 'orderConfirmation',
	'uses' => 'OrderConfirmationController@showOrderConfirmation',
]);
Route::get('/dashboard', [
	'as'   => 'dashboard',
	'uses' => 'DashboardController@showDashboard',
]);
Route::get('/createUser', [
	'as'   => 'createUser',
	'uses' => 'UserController@createUser',
]);

Route::post('/createUser', 'UserController@postCreateUser');

Route::get('/{userId}/modifyUser', [
	'as'   => 'modifyUser',
	'uses' => 'UserController@modifyUser',
]);

Route::post('/{userId}/modifyUser', 'UserController@postModifyUser');

Route::get('/orderList', [
	'as'   => 'orderList',
	'uses' => 'OrderController@orderList',
]);

Route::get('/addUser', [
	'as'   => 'addUser',
	'uses' => 'AddUserController@addUser',
]);
Route::get('/manageTills', [
	'as'   => 'manageTills',
	'uses' => 'ManageTillsController@manageTills',
]);
Route::get('/showTills', [
	'as'   => 'showTills',
	'uses' => 'ShowTillsController@showTills',
]);
Route::post('/addcategory', [
	'as'   => 'addcategory',
	'uses' => 'CategoryController@insert',
]);
Route::get('/showcategory', [
	'as'   => 'showcategory',
	'uses' => 'CategoryController@show',
]);
Route::get('/deletecategory/{id}', [
	'as'   => 'deletecategory/{id}',
	'uses' => 'CategoryController@destroy',
]);
Route::get('/editcategory/{id}', [
	'as'   => 'editcategory/{id}',
	'uses' => 'CategoryController@edit',
]);
Route::post('/updatecategory', [
	'as'   => 'updatecategory',
	'uses' => 'CategoryController@newUpdate',
]);
Route::post('/addmenu', [
	'as'   => 'addmenu',
	'uses' => 'ManageMenuController@insertmenu',
]);
Route::get('/manageMenu', [
	'as'   => 'manageMenu',
	'uses' => 'ManageMenuController@showmenu',
]);