<?php

namespace Brunocfalcao\Lettrz;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use ImLiam\BladeHelper\Facades\BladeHelper;

class LettrzServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->importMigrations();
        $this->registerCommands();
        $this->loadRoutes();
        $this->loadViews();
        $this->registerAnonymousComponents();
        $this->publishResources();
    }

    public function publishResources()
    {
        $this->publishes([
        __DIR__.'/../resources/publish' => base_path(),
        ], 'lettrz-assets');
    }

    protected function registerAnonymousComponents()
    {
        Blade::anonymousComponentNamespace('components', 'lettrz');
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lettrz');
    }

    protected function loadRoutes()
    {
        Route::middleware(['web'])
             ->group(function () {
                 include __DIR__.'/../routes/web.php';
             });
    }

    public function register()
    {
        //
    }

    protected function importMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    protected function registerCommands(): void
    {
        /*
        $this->commands([
            GetTickers::class,
        ]);
        */
    }
}
