<?php 

namespace Snetty\LaravelSimpleBreadcrumbs;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider {

    protected $defer = true;

    public function provides()
    {
        return ['Snetty\LaravelSimpleBreadcrumbs\Breadcrumbs'];
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        return $this->app->singleton('Snetty\LaravelSimpleBreadcrumbs\Breadcrumbs', function ($app) {
            return \Snetty\LaravelSimpleBreadcrumbs\Breadcrumbs::start('/', 'Home');
        });
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/vendor/snetty/laravel-simple-breadcrumbs'),
        ]);
    }

}
