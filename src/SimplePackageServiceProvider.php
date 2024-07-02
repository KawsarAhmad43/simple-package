<?php

namespace KawsarAhmad43\SimplePackage;

use Illuminate\Support\ServiceProvider;
use KawsarAhmad43\SimplePackage\Facades\Greet as GreetFacade;

class SimplePackageServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('greet', function() {
            return new \KawsarAhmad43\SimplePackage\Helpers\Greet;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->alias(GreetFacade::class, 'Greet');
    }
}
