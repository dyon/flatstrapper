<?php namespace Dyon\Flatstrapper;

use Illuminate\Support\ServiceProvider;

class FlatstrapperServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('dyon/flatstrapper');

        if (!is_dir($this->app['path.public'] . '/packages/dyon/')) {
            return false;
        }

        $this->app['basset']->package('dyon/flatstrapper');
        $this->app['basset']->collection('flatstrapper', function ($collection) {
            $collection->add('flatstrapper::css/bootstrap.min.css');
            $collection->add('flatstrapper::css/bootstrap-responsive.min.css');
            $collection->add('flatstrapper::js/jquery.js');
            $collection->add('flatstrapper::js/bootstrap.min.js');
        });
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        // Manually register Basset as we need it now
        if (!class_exists('Basset\BassetServiceProvider')) {
            $basset = __DIR__ . '/../../../../jasonlewis/basset/src/Basset/BassetServiceProvider.php';
          
            if (file_exists($basset)) include $basset;
        }

        Helpers::setContainer($this->app);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
