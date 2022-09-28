<?php

namespace OnlineMarket\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class OnlineMarketServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * @return void
     */
    public function boot()
    {
        Route::middleware('web')
            ->group(__DIR__ . ('/../routes/web.php'));

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'online-market');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/online-market'),
        ]);
    }
}
