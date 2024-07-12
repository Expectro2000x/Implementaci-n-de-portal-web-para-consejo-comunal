<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
     * Aquí se activan los servicios de aplicación de Bootstrap.
     */
    public function boot(): void
    {
        //Se activa el paginador de Bootstrap
        Paginator::useBootstrapFive();
    }
}
