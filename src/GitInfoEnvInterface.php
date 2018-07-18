<?php

namespace Artistan\GitInfo;

use eiriksm\GitInfo\GitInfoInterface;

/**
 * Interface GitInfoEnvInterface
 *
 * @package Artistan\GitInfo
 */
interface GitInfoEnvInterface extends GitInfoInterface
{
    /**
     * Gets the current branch name
     *
     * @return string|bool
     *   A branch name string, or FALSE if there was a problem.
     */
    public function getBranch();

    /**
     * Gets the most recent tag for the repository
     *
     * @return string|bool
     *   A tag name string, or FALSE if there was a problem.
     */
    public function getLatestTag();

    /**
     * build the path with replacements based on passed params
     *
     * @param $branch
     * @param $tag
     * @param $path
     * @return string
     */
    public function buildPath($branch, $tag, $path);

    /**
     * Gets the configs based on passed data
     *
     * @param null $branch
     * @param null $tag
     * @param null $path
     * @return array
     */
    public function getConfigs($branch = null, $tag = null, $path = null);
}
