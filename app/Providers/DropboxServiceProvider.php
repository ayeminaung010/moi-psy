<?php

namespace App\Providers;

// use Illuminate\Filesystem\Filesystem;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\ServiceProvider;
// use Spatie\FlysystemDropbox\DropboxAdapter;
// use Spatie\Dropbox\Client as DropboxClient;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Spatie\Dropbox\Client as DropboxClient;
use Spatie\FlysystemDropbox\DropboxAdapter;

class DropboxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Storage::extend('dropbox', function ($app, $config) {
            $client = new DropboxClient(
                $config['add_authorization_token']
            );

            return new Filesystem(new DropboxAdapter($client));
        });
    }
}
