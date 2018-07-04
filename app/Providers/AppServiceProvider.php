<?php

namespace App\Providers;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;
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
        // create directive isAdmin to check user is admin or not
        \Blade::if('isAdmin', function() {
            return auth()->check() && Auth::user()->admin == 1;

        });
        // Create Directive isUser
            \Blade::if('isUser', function(){
                return  auth()->check() && Auth::user()->admin == 1;


        });
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
