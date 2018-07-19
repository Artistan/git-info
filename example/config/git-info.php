<?php

return [
    /**
     * DEMO
     *
     * want to setup links to my cdn
     * https://my.server.cdn/versions/[TAG]
     *
     * tag will either be replaced with the most recent tag, or the checked out branch (staging and dev!)
     */

    'path' => env('GIT_INFO_PATH', '/versions/[REPO]/[BRANCH]/[TAG]'),

    /**
     * leaving these null so they are dynamic
     */

    'tag' => env('GIT_INFO_TAG', null),
    'branch' => env('GIT_INFO_BRANCH', null),
    'repo' => env('GIT_INFO_REPO', null),
    'last-updated' => null,
    'tag_over_ride' => 'default'
];
