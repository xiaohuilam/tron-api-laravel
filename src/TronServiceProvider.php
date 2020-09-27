<?php
namespace IEXBase\TronAPI\Laravel;


use IEXBase\TronAPI\Tron;
use Illuminate\Support\ServiceProvider;

class TronServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->configure();
        $this->app->bind('tron-api', function ($app) {
            return new Tron();
        });
    }

    /**
     * Setup the configuration.
     */
    protected function configure()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/tron-api.php', 'tron-api');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['tron-api'];
    }
}