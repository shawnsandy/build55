<?php


/*
------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('jarvis::index', ["theme_class" => "front-page"]);
}
);

Route::group(['prefix' => "extras"], function () {
	Extras::routes();
}
);

Route::group(["prefix" => "page"], function () {
	Pages::routes();
}
);

Route::group(["prefix" => "orangebox"], function () {
	Orangebox::routes();
	Route::view("theme-setup/", "orangebox::pages.theme-install");
}
);



Route::group(['prefix' => 'jarvis'], function() {
	Jarvis::routes();


	/**
	* Sets the theme install routes
	 * Not set in the routes files
	 *
	 */



}
);

Route::group(["prefix" => 'reveal-ui'], function() {
	Route::view("/themes", "jarvis::install.index");
});






