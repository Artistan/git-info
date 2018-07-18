<?php

namespace Artistan\GitInfo;

use Illuminate\Support\ServiceProvider;
use \eiriksm\GitInfo\GitInfo as PhpGitInfo;

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
        // laravel function to publish configuration assets
        if (function_exists('base_path')) {
            $this->publishes([
                __DIR__.'/Assets/Config' => base_path('config'),
            ]);
        }
    }

    /**
     * Register the services.
     */
    public function register()
    {
        $this->app->singleton(PhpGitInfo::class, function () {
            return new PhpGitInfo();
        });
        $this->app->alias(PhpGitInfo::class, 'git-info');

        $this->app->singleton(GitInfoEnv::class, function () {
            return new GitInfoEnv();
        });
        $this->app->alias( GitInfoEnv::class, 'git-info-env');
    }
}
