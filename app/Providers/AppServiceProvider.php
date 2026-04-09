<?php

namespace App\Providers;

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
        \Illuminate\Support\Facades\Gate::policy(\App\Models\Berita::class, \App\Policies\BeritaPolicy::class);
        \Illuminate\Support\Facades\Gate::policy(\App\Models\Event::class, \App\Policies\EventPolicy::class);
        \Illuminate\Support\Facades\Gate::policy(\App\Models\Galeri::class, \App\Policies\GaleriPolicy::class);
        \Illuminate\Support\Facades\Gate::policy(\App\Models\Kursus::class, \App\Policies\KursusPolicy::class);
        \Illuminate\Support\Facades\Gate::policy(\App\Models\Kelas::class, \App\Policies\KelasPolicy::class);
        \Illuminate\Support\Facades\Gate::policy(\App\Models\User::class, \App\Policies\UserPolicy::class);
    }
}
