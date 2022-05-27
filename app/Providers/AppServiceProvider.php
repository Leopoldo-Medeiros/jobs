<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
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
        // It allows the mass assignment, and it's no longer needs to require
        // the user to add the "$fillable" in the Model
        // Eloquent ORM offers Mass Assignment functionality which helps them assign(insert)
        // large number of input to database.
        Model::unguard();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
