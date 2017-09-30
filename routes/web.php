<?php







/*
---------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('jarvis::index');
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
}
);

