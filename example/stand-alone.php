<?php

require '../vendor/autoload.php';

$git = new Artistan\GitInfo\GitInfoEnv();

// dynamic build
var_dump($git->getConfigs('/path/[REPO]/[BRANCH]/[TAG]'));

// or dig into the methods...
var_dump($git->getShortHash());
var_dump($git->getVersion());
var_dump($git->getDate());
var_dump($git->getApplicationVersionString());
var_dump($repo = $git->getBranch());
var_dump($branch = $git->getBranch());
var_dump($tag = $git->getLatestTag());
var_dump($path = $git->buildPath($repo, $branch,$tag,'/path/[REPO]/[BRANCH]/[TAG]'));
