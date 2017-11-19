<?php



/*
-----------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	 //dd(jarvis_views("index", "shawnsandy"));
	return view(jarvis_views("index"), ["theme_class" => "front-page"]);
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


Route::group(['prefix' => config("jarvis.base_url")], function() {

	Jarvis::install_routes();

	Jarvis::generator_routes();

	Jarvis::routes();
});

Route::group(["prefix" => 'reveal-ui'], function() {
	Route::view("/themes", "jarvis::install.index");
});

Route::get("test", function()
{
    config(["jarvis.view" => "jarvisThemes"]);

    dump(jarvis_views("test", true));

    return view(jarvis_views("test.index"));
});
// Route::post("installs","\ShawnSandy\Jarvis\Controllers\InstallsController" );



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Dashauth::routes();

Route::get('/settings', 'SettingsController@index')->name('settings');

Imgfly::routes();

Route::view("welcome", "welcome");
