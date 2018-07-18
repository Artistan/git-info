<?php

namespace Artistan\GitInfo;

use eiriksm\GitInfo\GitInfoInterface;

/**
 * Interface GitInfoEnvInterface
 *
 * @package Artistan\GitInfo
 */
interface GitInfoEnvInterface extends GitInfoInterface{

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

}
