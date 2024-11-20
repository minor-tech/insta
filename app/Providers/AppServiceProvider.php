<?php

namespace App\Providers;

use App\View\Components\TextInput;
use App\View\Components\InputLabel;
use Illuminate\Support\Facades\Blade;
use App\View\Components\PrimaryButton;
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
        Blade::component('input-label', InputLabel::class);
        Blade::component('text-input', TextInput::class);
        Blade::component('primary-button', PrimaryButton::class);
    }
}
