# Artistan/git-info

[![Packagist](https://img.shields.io/packagist/v/artistan/git-info.svg?maxAge=3600)](https://packagist.org/packages/artistan/git-info)
[![Packagist](https://img.shields.io/packagist/dt/artistan/git-info.svg?maxAge=3600)](https://packagist.org/packages/artistan/git-info)
[![Coverage Status](https://coveralls.io/repos/github/Artistan/git-info/badge.svg?branch=master)](https://coveralls.io/github/Artistan/git-info?branch=master)
[![Build Status](https://travis-ci.org/Artistan/git-info.svg?branch=master)](https://travis-ci.org/Artistan/git-info)

[Artistan/git-info](https://github.com/Artistan/git-info) assists with dynamic environment configurations based on your git branch or tag.

git-info will create a config that you can use to link to dynamic places such as versioned cdn repository folders.

#### [Example Results](https://github.com/Artistan/git-info/blob/master/example/example.md)

### composer
```json
    "require": {
        "artistan/revive-xmlrpc": "*"
    }
```

### cli install

```bash
composer require artistan/git-info 
php artisan vendor:publish --provider=artistan/git-info 
```

#### [Documentation](https://github.com/victorjonsson/PHP-Markdown-Documentation-Generator) Updates

[PHP-Markdown-Documentation-Generator](https://github.com/victorjonsson/PHP-Markdown-Documentation-Generator)

```bash
./vendor/bin/phpdoc-md generate --ignore=test,examples src > api.md
```
