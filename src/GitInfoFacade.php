<?php

namespace Artistan\GitInfo;

use Illuminate\Support\Facades\Facade;

/**
 * Class GitInfoFacade
 *
 * @package Artistan\GitInfo
 */
class GitInfoFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'git-info';
    }
}
