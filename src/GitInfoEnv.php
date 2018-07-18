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
    public function getBranch()
    {
        if (! $branch = $this->execAndTrim('rev-parse --abbrev-ref HEAD')) {
            return false;
        }

        return $branch;
    }

    /**
     * {@inheritdoc}
     */
    public function getLatestTag()
    {
        if (! $branch = $this->execAndTrim('describe --tags --abbrev=0')) {
            return false;
        }

        return $branch;
    }

    /**
     * {@inheritdoc}
     */
    public function buildPath($branch, $tag, $path)
    {
        if (strpos($path, '[TAG]')) {
            $path = str_replace('[TAG]', $tag ?: $branch, $path);
        } else {
            if (strpos($path, '[BRANCH]')) {
                $path = str_replace('[BRANCH]', $tag ?: $branch, $path);
            }
        }

        return $path;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigs($branch = null, $tag = null, $path = null)
    {
        $branch = $branch ?? $this->getBranch();
        $tag = $tag ?? $this->getLatestTag();
        $path = $this->buildPath($branch, $tag, $path);
        $configUpdates = [
            'git-info.branch' => $branch,
            'git-info.tag' => $tag,
            /* use tag if we have it, default back to branch.. */
            'git-info.path' => $path,
            'git-info.last-updated' => microtime(true),
        ];

        return $configUpdates;
    }
}
