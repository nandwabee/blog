<?php

namespace Investigatively\Article;

use Illuminate\Support\ServiceProvider;

class ArticleServiceProvider extends ServiceProvider{
  /**
   * Boot method for the service provider
   */
  public function boot(){
    /**
     * Load custom views for the package.
     */
    $this->loadViewsFrom(__DIR__.'/Views', 'investigatively');

    /**
     * Publish the package assets.
     */
    $this->publishes([
        __DIR__.'/Views' => base_path('resources/views/vendor/investigatively'),
        __DIR__.'/Controllers' => base_path('app/Http/Controllers/Investigatively'),
        __DIR__.'/Config/investigatively.php' => config_path('investigatively.php'),
    ],'config');

    $this->publishes([
        __DIR__.'/Assets/js/editor.js' => public_path('vendor/investigatively/js/editor.js'),
        __DIR__.'/Assets/css/screen.css' => public_path('vendor/investigatively/css/screen.css'),
        __DIR__.'/Assets/templates' => public_path('vendor/investigatively/templates'),
        __DIR__.'/Assets/font' => public_path('vendor/investigatively/font')
    ], 'public');

    /**
     * Register the routes file
     */
    if (! $this->app->routesAreCached()) {
      require __DIR__.'/Config/routes.php';
    }
  }

  /**
   * Register method for the package.
   */
  public function register(){
    
  }
}