<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{



	/**
	* Bootstrap any application services.
			     *
			     * @return void
			     */
			    public function boot()
			    {
		config(["jarvis.new" => [
						        'author' => "your name",
						        'email' => "your email",
						        'website' => "your website",
				                "options" => [ ],
				                "fields" => [ ]
						        ]]);
	}




	/**
	* Register any application services.
			     *
			     * @return void
			     */
			    public function register()
			    {
		//
	}

}
