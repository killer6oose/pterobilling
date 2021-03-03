<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    //public const HOME = '/my';
    public const HOME = '/dashboard'; // For testing only

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web') // For testing only
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
            
            /* Store */
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/store.php'));

            /* Client Area */
            Route::prefix('my')
                ->name('client.')
                //->middleware(['web', 'auth'])
                ->middleware('web') // For testing only
                ->namespace($this->namespace)
                ->group(base_path('routes/client.php'));

            /* Admin Area */
            Route::prefix('admin')
                ->name('admin.')
                //->middleware(['web', 'auth', 'admin'])
                ->middleware('web') // For testing only
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
