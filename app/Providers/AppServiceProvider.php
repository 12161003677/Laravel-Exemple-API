<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\ClienteRepositoryInterface',
            'App\Repositories\Eloquent\ClienteRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\AtividadeComercialRepositoryInterface',
            'App\Repositories\Eloquent\AtividadeComercialRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
