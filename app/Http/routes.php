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
	'uses' => 'ClientOrderController@showOrderConfirmation',
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
	'uses' => 'TillsController@manageTills',
]);
Route::get('/showTills', [
	'as'   => 'showTills',
	'uses' => 'TillsController@showTills',
]);

// dashboard login
Route::get('/adminlogin', [
	'as'   => 'adminlogin',
	'uses' => 'AdminloginController@adminLogin',
]);

// category routes
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


// menu routes
Route::post('/addmenu', [
	'as'   => 'addmenu',
	'uses' => 'MenuController@insertmenu',
]);
Route::get('/manageMenu', [
	'as'   => 'manageMenu',
	'uses' => 'MenuController@showAdminMenu',
]);
Route::get('/deletemenu/{id}', [
	'as'   => 'deletemenu/{id}',
	'uses' => 'MenuController@deleteMenu',
]);
Route::get('/editmenu/{id}', [
	'as'   => 'editmenu/{id}',
	'uses' => 'MenuController@editMenu',
]);
Route::post('/updatemenu', [
	'as'   => 'updatemenu',
	'uses' => 'MenuController@menuUpdate',
]);

Route::post('/addUser', [
	'as'   => 'addUser',
	'uses' => 'AddUserController@addUser',
]);

// tills routes
Route::post('/addtills', [
	'as'   => 'addtills',
	'uses' => 'TillsController@insertTills',
]);
Route::get('/edittill/{id}', [
	'as'   => 'edittill/{id}',
	'uses' => 'TillsController@editTills',
]);
Route::post('/updatetill', [
	'as'   => 'updatetill',
	'uses' => 'TillsController@updateTills',
]);
Route::get('/deletetill/{id}', [
	'as'   => 'deletetill/{id}',
	'uses' => 'TillsController@deleteTills',
]);

// settings routes

Route::get('/settings', [
	'as'   => 'settings',
	'uses' => 'settingsController@settings',
]);