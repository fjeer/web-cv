<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Request;
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
        $host = (string) Request::getHost();

        if (str_contains($host, 'ngrok-free.app') || str_contains($host, 'ngrok-free.dev') || str_contains($host, 'ngrok.app')) {
            URL::forceScheme('https');
        }

        Gate::policy(\App\Models\Berita::class, \App\Policies\BeritaPolicy::class);
        Gate::policy(\App\Models\Event::class, \App\Policies\EventPolicy::class);
        Gate::policy(\App\Models\Galeri::class, \App\Policies\GaleriPolicy::class);
        Gate::policy(\App\Models\Kursus::class, \App\Policies\KursusPolicy::class);
        Gate::policy(\App\Models\Kelas::class, \App\Policies\KelasPolicy::class);
        Gate::policy(\App\Models\User::class, \App\Policies\UserPolicy::class);
    }
}
