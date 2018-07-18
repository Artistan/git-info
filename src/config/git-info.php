<?php

return [
    /**
     * define your dynamic path
     *
     * this is typically used to version your CDN files or other files
     *     - staging typically will be a branch name
     *     - production typically will be a tag name
     *
     * GitInfoEnv updates these path strings
     *     - [TAG] is replaced with `git-info.tag`, if null then `git-info.branch`
     *     - [BRANCH] is replaced with `git-info.branch`
     *
     * overriding this config without [TAG] or [BRANCH] will prevent automation of the path
     *
     *
     * NOTE! you can use `GIT_INFO_PATH` in your for environment overrides
     *     - .env.production
     *     - .env.staging
     *     - if APP_DEV is set on server/virtualhost this will be automagical!
     */

    'path' => env('GIT_INFO_PATH', '/[TAG]'),

    /**
     * overriding the tag will prevent automation of the tag from git
     */

    'tag' => env('GIT_INFO_TAG', null),

    /**
     * overriding the tag will prevent automation of the tag from git
     */

    'branch' => env('GIT_INFO_BRANCH', null),

    /**
     * this should be set to null so that cache will actually cache the configs
     * otherwise it will rebuild the data every execution of app.
     */

    'last-updated' => null,
];
