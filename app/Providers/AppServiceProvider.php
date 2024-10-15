<?php

namespace App\Providers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register the middleware
        $this->configureMiddleware();
    }

    /**
     * Configure middleware for the application.
     */
    protected function configureMiddleware(): void
    {
        // Register the alias for 'check.role' middleware
        $this->app[Router::class]->aliasMiddleware('check.role', \App\Http\Middleware\CheckRole::class);
    }
}
