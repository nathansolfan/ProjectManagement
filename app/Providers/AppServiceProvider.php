<?php

namespace App\Providers;

use App\Http\Middleware\CheckRole;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
    public function boot(Router $router): void
    {
        $router->aliasMiddleware('role', CheckRole::class);

        // Register Blade components
        Blade::component('layout', \App\View\Components\Layout::class);
    }
}
