<?php namespace Rek\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider {
  public function boot()
  {
    View::addNamespace('rek', __DIR__.'/../resources/views');
  }

  public function register()
  {
    $this->app->register(
      'Rek\Providers\RouteServiceProvider'
    );
  }
}