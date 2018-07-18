<?php

if (! function_exists('env')) {
    // returns default since env is not a helper function (non-laravel)
    function env($key, $default)
    {
        return $default;
    }
}

return [

    /*
     * --------------------------------------------------------------------------
     * Production branch(s)
     *      - comma delimited list
     *      - will use tag helpers
     *      - otherwise it will have the branch name helpter
     * --------------------------------------------------------------------------
    */

    'production' => explode(',',env('GIT_INFO_PROD', 'master,production')),

];
