<?php

namespace Artistan\GitInfo;

use Illuminate\Support\Facades\Facade;

class GitInfoEnvFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'git-info-env';
    }
}
