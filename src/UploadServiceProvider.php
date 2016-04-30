<?php

namespace Tuta\Upload;

use Illuminate\Support\ServiceProvider;

class UploadServiceProvider extends ServiceProvider
{
    protected $defer = false;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    //  $this->app->bind('upload',function($app){
    //    return new Upload($app);
    //  });
    // $this->app['upload'] = $this->app->share(function($app)
		// {
		// 	return new Upload;
		// });
    //   $this->app->booting(function()
    //     {
    //         $loader = \Illuminate\Foundation\AliasLoader::getInstance();
    //         $loader->alias('Upload', 'Tuta\Upload\Facades\UploadFacade');
    //     });
        $this->app->bind('upload', function($app) {
            return new Upload($app);
        });
    }

    // public function provides()
  	// {
  	// 	return array('upload');
  	// }
}
