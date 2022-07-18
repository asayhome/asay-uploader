<?php

namespace Asayhome\AsayUploader;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AsayUploaderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/asayuploader.php' => config_path('asayuploader.php'),
        ], 'asayuploader-config');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../lang', 'asayuploader');
        $this->publishes([
            __DIR__ . '/../lang' => $this->app->langPath('vendor/asayuploader'),
        ], 'asayuploader-lang');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'asayuploader');
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/asayuploader'),
        ], 'asayuploader-views');
        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/asayuploader'),
        ], 'asayuploader-assets');



        Livewire::component('asay-uploader', AsayUploader::class);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/asayuploader.php',
            'asayuploader'
        );
    }
}
