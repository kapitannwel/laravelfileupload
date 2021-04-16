<?php

namespace kapitannwel\LaravelFileUpload;

use Illuminate\Support\ServiceProvider;

class LaravelFileUploadServiceProvider extends ServiceProvider
{
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
      $this->app->make('kapitannwel\LaravelFileUpload\LaravelFileUpload');
    }
}
