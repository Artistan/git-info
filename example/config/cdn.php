<?php

return [
    // the base uri to my cdn
    'uri' => env('APP_CDN_URI', 'https://my.server.cdn'),
    // this will be dynamically set in the AppServiceProvider useing git-info...
    'path' => env('APP_CDN_PATH', 'Set Dynamically in AppServiceProvider'),
    'url' => env('APP_CDN_URL', 'Set Dynamically in AppServiceProvider'),
];
