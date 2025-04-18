<?php 

namespace Jrfs22\LaravelPostModule;

use Illuminate\Support\ServiceProvider;

class PostModuleServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->loadRoutesFrom(__DIR__."routes/web.php");
    $this->loadViewsFrom(__DIR__."../resources/views","PostModule");
    $this->loadMigrationsFrom(__DIR__."../database/migrations");
  }
}