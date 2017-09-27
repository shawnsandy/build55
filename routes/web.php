<?php





/*
-----------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('pagekit::welcome');
});

Route::group(['prefix' => "extras"], function () {
	Extras::routes();
});

Route::group(["prefix" => "page"], function () {
	Pages::routes();
});

Route::group(["prefix" => "orangebox"], function () {
	Orangebox::routes();
	Route::view("theme-setup/", "orangebox::pages.theme-install");
});
