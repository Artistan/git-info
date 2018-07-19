<?php

namespace Artistan\GitInfo;

use eiriksm\GitInfo\GitInfo;
use pastuhov\Command\Command;

/**
 * Class GitInfoEnv
 *
 * @package Artistan\GitInfo
 */
class GitInfoEnv extends GitInfo implements GitInfoEnvInterface
{
    /**
     * The git command.
     *
     * @var string
     */
    private $gitCommand;

    /**
     * Constructor.
     *
     * @param string $git_command
     */
    public function __construct($git_command = 'git') {
        parent::__construct($git_command);
        $this->gitCommand = $git_command;
    }

    /**
     * {@inheritdoc}
     */
    public function getRepo()
    {
        if (! $repo = $this->simpleExecAndTrim('basename `'.$this->gitCommand.' rev-parse --show-toplevel`')) {
            return null;
        }

        return $repo;
    }

    /**
     * {@inheritdoc}
     */
    public function getBranch()
    {
        if (! $branch = $this->execAndTrim('rev-parse --abbrev-ref HEAD')) {
            return null;
        }

        return $branch;
    }

    /**
     * {@inheritdoc}
     */
    public function getLatestTag()
    {
        if (! $branch = $this->execAndTrim('describe --tags --abbrev=0')) {
            return null;
        }

        return $branch;
    }

    /**
     * {@inheritdoc}
     */
    public function buildPath($repo,$branch, $tag, $path)
    {
        if (strpos($path, '[TAG]')) {
            $path = str_replace('[TAG]', $tag, $path);
        }

        if (strpos($path, '[BRANCH]')) {
            $path = str_replace('[BRANCH]', $branch, $path);
        }

        if (strpos($path, '[REPO]')) {
            $path = str_replace('[REPO]', $repo, $path);
        }

        return $path;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigs( $path = null, $repo = null, $branch = null, $tag = null,  $tabFailOver = 'default')
    {
        $repo = $repo ?? $this->getRepo();
        $branch = $branch ?? $this->getBranch();
        $tag = $tag ?? ($this->getLatestTag() ?? ($tabFailOver ?? $branch));
        $path = $this->buildPath($repo, $branch, $tag, $path);

        // built to replace Laravel configs....
        $configUpdates = [
            'git-info.repo' => $repo,
            'git-info.branch' => $branch,
            'git-info.tag' => $tag,
            /* use tag if we have it, default back to branch.. */
            'git-info.path' => $path,
            'git-info.last-updated' => microtime(true),
        ];

        return $configUpdates;
    }


    /**
     * Helper to make sure we trim the output.
     *
     * @param string $command
     *   The command to run.
     *
     * @return string|bool
     *   The output string, or FALSE if things went badly.
     */
    protected function simpleExecAndTrim($command) {
        try {
            $result = Command::exec($command, []);
        }
        catch (\Exception $e) {
            $result = FALSE;
        }
        return $result;
    }

}
