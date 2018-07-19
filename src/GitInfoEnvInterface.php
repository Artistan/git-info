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
     * Gets the current repo name
     *
     * @return string|bool
     *   A repo name string, or FALSE if there was a problem.
     */
    public function getRepo();

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
     * build the $path with replacements based on passed params
     *     - [TAG] is replaced with $tag
     *     - [BRANCH] is replaced with $branch
     *     - [REPO] is replaced with $repo
     *
     * @param $repo
     * @param $branch
     * @param $tag
     * @param $path
     * @return string
     */
    public function buildPath($repo, $branch, $tag, $path);

    /**
     * Gets the configs based on passed data
     *     if $tag IS NULL then use $tabFailOver
     *     else if $tabFailOver IS NULL then use $branch
     *
     *  if you want to use blank as the tag default
     *     use $tabFailOver='' (empty string)
     *
     * @param string|null $path
     * @param string|null $repo
     * @param string|null $branch
     * @param string|null $tag
     * @param string $tabFailOver, will fail over to this value by default, otherwise use branch bame
     * @return array
     */
    public function getConfigs($path = null, $repo = null, $branch = null, $tag = null, $tabFailOver = 'default');
}
