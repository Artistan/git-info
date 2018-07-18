<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider
 *
 * @package App\Providers
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * last-cached will be null if not cached...
         */
        if (is_null(config('cdn.last-cached'))) {
            config([
                'cdn.last-cached' => microtime(true),
                /**
                 * This will set my path dynamically based on the tag/branch
                 */
                'cdn.path' => config('git-info.path'),
                'cdn.url' => config('cdn.uri').config('git-info.path')
            ]);
        }
        /**
         * now I can use config('cdn.url') to route to my current versioned content on my cdn
         */
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
