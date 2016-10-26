<?php

namespace Tld\Domain\Plugin\Services;

use Themosis\Facades\Route;
use Themosis\Foundation\ServiceProvider;

class RoutingService extends ServiceProvider
{
    /**
     * Register plugin routes.
     * Define a custom namespace.
     */
    public function register()
    {
        Route::group([
            'namespace' => 'Tld\Domain\Plugin\Controllers'
        ], function () {
            require themosis_path('plugin.tld.domain.plugin.resources').'routes.php';
        });
    }
}