<?php

namespace Themosis\Hook;

use Themosis\Foundation\ServiceProvider;

class HookServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('action', function ($container) {
            return new ActionBuilder($container);
        });

        $this->app->singleton('filter', function ($container) {
            return new FilterBuilder($container);
        });
    }
}
