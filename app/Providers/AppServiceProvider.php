<?php

namespace App\Providers;

//use App\Classes\AwesomeClass;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;




class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
		View::share('isAdmin', false);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
