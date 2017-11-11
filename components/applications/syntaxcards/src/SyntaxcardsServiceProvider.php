<?php

namespace ShawnSandy\Syntaxcards;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class SyntaxcardsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $router->aliasMiddleware('syntaxcards', \ShawnSandy\Syntaxcards\Middleware\SyntaxcardsMiddleware::class);

        $this->publishes([
            __DIR__.'/Config/syntaxcards.php' => config_path('syntaxcards.php'),
        ], 'syntaxcards_config');

        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');

        $this->loadMigrationsFrom(__DIR__ . '/Migrations');

        $this->loadTranslationsFrom(__DIR__ . '/Translations', 'syntaxcards');

        $this->publishes([
            __DIR__ . '/Translations' => resource_path('lang/vendor/syntaxcards'),
        ]);

        $this->loadViewsFrom(__DIR__ . '/Views', 'syntaxcards');

        $this->publishes([
            __DIR__ . '/Views' => resource_path('views/vendor/syntaxcards'),
        ]);

        $this->publishes([
            __DIR__ . '/Assets' => public_path('vendor/syntaxcards'),
        ], 'syntaxcards_assets');

        if ($this->app->runningInConsole()) {
            $this->commands([
                \ShawnSandy\Syntaxcards\Commands\SyntaxcardsCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/Config/syntaxcards.php', 'syntaxcards'
        );
    }
}
