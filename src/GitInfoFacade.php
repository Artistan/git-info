<?php

namespace Artistan\GitInfo;

use Illuminate\Support\Facades\Facade;

class GitInfoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'git-info';
    }
}
