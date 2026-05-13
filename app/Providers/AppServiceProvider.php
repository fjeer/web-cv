<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
    }
}
