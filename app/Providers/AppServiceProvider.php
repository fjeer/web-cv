<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;

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
        $forceHttps = app()->environment('production') || (bool) env('FORCE_HTTPS', false);

        if ($forceHttps) {
            URL::forceScheme('https');
        }

        $appUrl = env('APP_URL');
        $shouldForceRootUrl = app()->environment('production') || (bool) env('FORCE_APP_URL', false);

        if ($shouldForceRootUrl && !empty($appUrl)) {
            URL::forceRootUrl($appUrl);
        }

        // Rate limiter for pendaftaran (DaftarController@store)
        RateLimiter::for('daftar', function (Request $request) {
            $key = $request->ip() ?? ($request->user()?->id ?? 'global');
            return Limit::perMinute(10)->by($key);
        });
    }
}
