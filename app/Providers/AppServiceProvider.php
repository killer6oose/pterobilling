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
        // Only enable Laravel Telescope in local development environment
        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(\Illuminate\Http\Request $request)
    {
        // To fix ngrok base URL problem
        if ($request->server->has('HTTP_X_ORIGINAL_HOST')) {
            $this->app['url']->forceRootUrl($request->server('HTTP_X_FORWARDED_PROTO').'://'.$request->server('HTTP_X_ORIGINAL_HOST'));
        }
    }
}
