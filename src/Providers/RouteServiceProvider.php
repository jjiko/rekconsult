<?php namespace Rek\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Input;

class RouteServiceProvider extends ServiceProvider
{
  public function map(Router $router)
  {
    if (in_array(Input::server('HTTP_HOST'), ['rek.dev', 'local.rekconsult.com', 'www.rekconsult.com'])) {
      $router->group(['namespace' => $this->namespace], function ($router) {
        require_once(__DIR__ . '/../Http/routes.php');
      });
    }
  }
}