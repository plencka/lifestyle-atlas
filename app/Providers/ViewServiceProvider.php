<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('partials.language_select', function ($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('locales', config('app.locales'));
        });
    }
}
