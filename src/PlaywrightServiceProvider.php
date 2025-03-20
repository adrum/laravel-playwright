<?php

namespace WebId\LaravelPlaywright;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PlaywrightServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/playwright.php', 'playwright');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/routes/playwright.php' => base_path('routes/playwright.php'),
                __DIR__ . '/config/playwright.php' => base_path('config/playwright.php'),
            ]);

            $this->commands([
                PlaywrightBoilerplateCommand::class,
            ]);
        }

        if (
            $this->app->environment("production") ||
            !in_array(
                $this->app->environment(),
                config("playwright.allowed_environments")
            )
        ) {
            return;
        }

        $this->addRoutes();
    }

    protected function addRoutes()
    {
        Route::namespace('')
            ->middleware('web')
            ->group(__DIR__ . '/routes/playwright.php');
    }
}
