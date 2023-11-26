<?php

namespace dipeshsukhia\LaravelHtmlMinify;

use Illuminate\Support\ServiceProvider;

class LaravelHtmlMinifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/config/config.php' => config_path('htmlminify.php'),
            ], 'LaravelHtmlMinify');
        }
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'HtmlMinify');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-html-minify', function () {
            return new LaravelHtmlMinifyFacade;
        });

        $this->app['router']->middleware('LaravelMinifyHtml', 'dipeshsukhia\LaravelHtmlMinify\Middleware\LaravelMinifyHtml');

        $this->app['router']->aliasMiddleware('LaravelMinifyHtml', \dipeshsukhia\LaravelHtmlMinify\Middleware\LaravelMinifyHtml::class);
        $this->app['router']->pushMiddlewareToGroup('web', \dipeshsukhia\LaravelHtmlMinify\Middleware\LaravelMinifyHtml::class);
    }
}
