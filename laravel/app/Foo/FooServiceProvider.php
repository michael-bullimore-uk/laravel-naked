<?php

namespace App\Foo;

use Illuminate\Support\ServiceProvider;

class FooServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/config.php', 'foo');
    }
}
