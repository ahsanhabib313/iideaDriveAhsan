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
Route::get('/orderList', [
	'as'   => 'orderList',
	'uses' => 'OrderController@orderList',
]);
Route::get('/manageMenu', [
	'as'   => 'manageMenu',
	'uses' => 'ManageMenuController@manageMenu',
]);
Route::get('/addUser', [
	'as'   => 'addUser',
	'uses' => 'AddUserController@addUser',
]);