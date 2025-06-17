<?php

namespace khessels\ResponseFormat\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Http\Kernel;
use khessels\ResponseFormat\Middleware\ResponseFormat;

class ResponseFormatServiceProvider extends ServiceProvider
{
    public function boot( Router $router, Kernel $kernel)
    {
        // Optional: Register routes, views, etc.
        $router->aliasMiddleware('ResponseFormat', ResponseFormat::class);

        // Publish config
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('response-format.php'),
        ]);
    }

    public function register()
    {
        // Optional: Bind services, etc.

    }
}
