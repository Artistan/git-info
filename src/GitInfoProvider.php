<?php

namespace Artistan\GitInfo;

use eiriksm\GitInfo\GitInfo as PhpGitInfo;
use Illuminate\Support\ServiceProvider;

/**
 * Class GitInfoProvider
 *
 * @package Artistan\GitInfo
 */
class GitInfoProvider extends ServiceProvider
{
    /**
     * Alias the services in the boot.
     */
    public function boot()
    {
        /**
         * laravel function to publish configuration assets
         */
        $this->publishes([
            __DIR__.'/config/git-info.php' => config_path('git-info.php'),
        ]);
    }

    /**
     * Register the services.
     *
     * also need to override configs before all Providers are loaded so they have the data needed!
     */
    public function register()
    {
        /**
         * we need to register our facades before we use them below..
         */
        $this->app->singleton(PhpGitInfo::class, function () {
            return new PhpGitInfo();
        });
        $this->app->alias(PhpGitInfo::class, 'git-info');

        $this->app->singleton(GitInfoEnv::class, function () {
            return new GitInfoEnv();
        });
        $this->app->alias(GitInfoEnv::class, 'git-info-env');

        /**
         * Check Cache: bootstrapping is called before config is cached (\Illuminate\Foundation\Console\app::bootstrapWith)
         * therefore these updates WILL be cached if `php artisan config:cache` is used
         * and there is no need to reprocess the git configuration if the config is cached!
         */
        if (is_null(config('git-info.last-updated'))) {
            /**
             * update configs in our register method in order to allow providers to use them at boot time.
             */
            $this->mergeConfigFrom(__DIR__.'/config/git-info.php', 'git-info');
            /** @var \Artistan\GitInfo\GitInfoEnv $GitInfoEnvInstance */
            $GitInfoEnvInstance = \App::make('git-info-env');
            /**
             * This will get the config update if they are still null
             */
            $configUpdates = $GitInfoEnvInstance->getConfigs(config('git-info.branch'), config('git-info.tag'), config('git-info.path'));
            /**
             * the final array is passed to config in order to store them in the standard config for global access
             */
            config($configUpdates);
        }
    }
}
