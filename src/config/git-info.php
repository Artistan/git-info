<?php

return [
    /**
     * define your dynamic path
     *
     * DEFAULT is `/version/[REPO]/[BRANCH]/[TAG]`
     *     where TAG defaults to `default` if no tag present
     *
     * this is typically used to version your CDN files or other files
     *     - staging typically will be a branch name
     *     - production typically will be a tag name
     *
     * GitInfoEnv::getConfigs() does overrides of `git-lab.tag`, see `git-lab.tag_over_ride` below
     *
     * GitInfoEnv::buildPath() updates `git-lab.path`
     *     - [TAG] is replaced with `git-info.tag`
     *     - [BRANCH] is replaced with `git-info.branch`
     *     - [REPO] is replaced with `git-info.repo`
     *
     * overriding this string with no [TAG] or [BRANCH] strings will prevent automation of the path
     *
     * NOTE! you can add `GIT_INFO_PATH` in your for environment configs for dynamic environment paths
     *     - .env.production
     *     - .env.staging
     *     - if APP_DEV is set on server/virtualhost this will be automagical!
     */

    'path' => env('GIT_INFO_PATH', '/version/[REPO]/[BRANCH]/[TAG]'),

    /**
     * overriding the tag will prevent automation of the tag from git
     */

    'tag' => env('GIT_INFO_TAG', null),

    /**
     * overriding the branch will prevent automation of the branch from git
     */

    'branch' => env('GIT_INFO_BRANCH', null),

    /**
     * overriding the repo name will prevent automation of the repo name from git
     */

    'repo' => env('GIT_INFO_REPO', null),

    /**
     * this should be set to null so that cache will actually cache the configs
     * otherwise it will rebuild the data every execution of app.
     */

    'last-updated' => null,

    /**
     * Used by GitInfoEnv::getConfigs()
     *     if tag IS NULL then use tag_over_ride
     *     else if tag_over_ride IS NULL then use branch
     *
     *  if you want to use blank as the tag default
     *     use tag_over_ride='' (empty string)
     */

    'tag_over_ride' => 'default'
];
