<?php

namespace Ericrf\Test;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot(): void
    {}

    public function register(): void
    {
        $this->registerHelpers();
    }

    private function registerHelpers(): void
    {
        $this->app->make('Ericrf\LaravelUtilities\Helpers\HelloWorld');
    }
}
