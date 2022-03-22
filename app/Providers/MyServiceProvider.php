<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App\Providers\AppServiceProvider;
use App\MyClasses\PowerMyService;

class MyServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    app()->singleton('myservice', 'App\MyClasses\PowerMyService');
    app()->singleton('App\MyClasses\MyServiceInterface','App\MyClasses\PowerMyService');
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
  }
}
