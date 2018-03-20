<?php
namespace App\Applications\Site\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class SiteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Applications\Site\Http\Controllers';

    public function boot(Router $router)
    {
        $this->registerRoutes($this->app['router']);
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'site');
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    protected function registerRoutes(Router $router)
    {
        $options = [
            'namespace' => $this->namespace,
            'middleware' => 'web',
            'as' => 'site.'
        ];

        $router->group($options, function ($router) {
            require app_path('Applications/Site/routes/web.php');
        });
    }
}