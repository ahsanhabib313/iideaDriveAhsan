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
	'uses' => 'dashboardController@showDashboard',
]);
Route::get('/createUser', [
	'as'   => 'createUser',
	'uses' => 'createUserController@createUser',
]);