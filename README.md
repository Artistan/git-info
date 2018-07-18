# Artistan/git-info

[![Packagist](https://img.shields.io/packagist/v/artistan/git-info.svg?maxAge=3600)](https://packagist.org/packages/artistan/git-info)
[![Packagist](https://img.shields.io/packagist/dt/artistan/git-info.svg?maxAge=3600)](https://packagist.org/packages/artistan/git-info)
[![Coverage Status](https://coveralls.io/repos/github/Artistan/git-info/badge.svg?branch=master)](https://coveralls.io/github/Artistan/git-info?branch=master)
[![Build Status](https://travis-ci.org/Artistan/git-info.svg?branch=master)](https://travis-ci.org/Artistan/git-info)

[Artistan/git-info](https://github.com/Artistan/git-info) assists with dynamic environment configurations based on your git branch or tag.

git-info will create a config that you can use to link to dynamic places such as versioned cdn repository folders.

Works well as a simple Php object or as a package for Laravel 5.6.

### composer
```json
    "require": {
        "artistan/git-info": "*"
    }
```

### cli install

```bash
composer require artistan/git-info 
php artisan vendor:publish --provider=artistan/git-info 
```

#### [Example Laravel](https://github.com/Artistan/git-info/blob/master/example/example.md)

`./app/Providers/AppServiceProvider.php`

```php
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * last-cached will be null if not cached...
         */
        if (is_null(config('cdn.last-cached'))) {
            config([
                'cdn.last-cached' => microtime(true),
                /**
                 * This will set my path dynamically based on the tag/branch
                 */
                'cdn.path' => config('git-info.path'),
                'cdn.url' => config('cdn.uri').config('git-info.path')
            ]);
        }
        /**
         * now I can use config('cdn.url') to route to my current versioned content on my cdn
         */
    }
```



#### Example Php

```php
require '../vendor/autoload.php';

$git = new Artistan\GitInfo\GitInfoEnv();

var_dump($git->getShortHash());
var_dump($git->getVersion());
var_dump($git->getDate());
var_dump($git->getApplicationVersionString());
var_dump($branch = $git->getBranch());
var_dump($tag = $git->getLatestTag());
var_dump($path = $git->buildPath($branch,$tag,'/path/[TAG]'));
var_dump($git->getConfigs())
```
will end up with `/path/branchName` or  `/path/{v#.#.#}`

#### [Documentation](https://github.com/victorjonsson/PHP-Markdown-Documentation-Generator) Updates

[PHP-Markdown-Documentation-Generator](https://github.com/victorjonsson/PHP-Markdown-Documentation-Generator)

```bash
./vendor/bin/phpdoc-md generate --ignore=test,examples src > api.md
```
