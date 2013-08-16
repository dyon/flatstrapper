<?php
namespace Dyon\Flatstrapper;

use Illuminate\Support\ServiceProvider;

// Manually register Basset as we need it now
if (!class_exists('Basset\BassetServiceProvider')) {
  $basset = __DIR__.'/../../../../jasonlewis/basset/src/Basset/BassetServiceProvider.php';
  if (file_exists($basset)) include $basset;
}

class BootstrapperServiceProvider extends ServiceProvider
{
  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $this->package('dyon/flatstrapper');
    $this->app['config']->package('dyon/flatstrapper', __DIR__. '/../config');

    Helpers::setContainer($this->app);
  }

  /**
   * Register assets
   *
   * @return void
   */
  public function boot()
  {
    if (!is_dir($this->app['path.public'].'/packages/dyon/')) {
      return false;
    }

    $this->app['basset']->package('dyon/flatstrapper');
    $this->app['basset']->collection('flatstrapper', function($collection) {
      $collection->add('flatstrapper::css/flatstrap.min.css');
      $collection->add('flatstrapper::css/flatstrap-responsive.min.css');
      $collection->add('flatstrapper::js/jquery-1.10.2.min.js');
      $collection->add('flatstrapper::js/flatstrap.min.js');
    });
  }
}
