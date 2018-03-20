<?php
namespace App\Applications\Admin\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Applications\Admin\Http\Controllers';

    public function boot(Router $router)
    {
        $this->registerRoutes($this->app['router']);
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'admin');
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
            'middleware' => ['web', 'auth'],
            'prefix' => '',
            'as' => 'admin.',
        ];

        $router->group($options, function ($router) {
            require app_path('Applications/Admin/routes/web.php');
        });
    }
}