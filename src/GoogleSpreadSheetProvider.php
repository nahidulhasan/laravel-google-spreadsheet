<?php

namespace Nahidul\GoogleSpreadSheet;

use Illuminate\Support\ServiceProvider;

class GoogleSpreadSheetProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Nahidul\GoogleSpreadSheet\GoogleSpreadSheetController');
    }
}
