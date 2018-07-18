<?php

namespace Artistan\GitInfo;

use Illuminate\Support\Facades\Facade;

/**
 * Class GitInfoEnvFacade
 *
 * @package Artistan\GitInfo
 */
class GitInfoEnvFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'git-info-env';
    }
}
