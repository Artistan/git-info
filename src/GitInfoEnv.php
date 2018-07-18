<?php

namespace Artistan\GitInfo;

use eiriksm\GitInfo\GitInfo;

/**
 * Class GitInfoEnv
 *
 * @package Artistan\GitInfo
 */
class GitInfoEnv extends GitInfo implements GitInfoEnvInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBranch() {
        if (!$branch = $this->execAndTrim('rev-parse --abbrev-ref HEAD')) {
            return FALSE;
        }
        return $branch;
    }

    /**
     * {@inheritdoc}
     */
    public function getLatestTag() {
        if (!$branch = $this->execAndTrim('describe --tags --abbrev=0')) {
            return FALSE;
        }
        return $branch;
    }
}
