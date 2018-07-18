<?php

use Artistan\GitInfo\GitInfoEnv;

const BOGUS_COMMAND = 'inTheDepthsOfHell';

class GitInfoTest extends \PHPUnit_Framework_TestCase {

    public function testLatestTage() {
        $i = new GitInfoEnv();
        $tag = $i->getLatestTage();
        $this->assertNotFalse($tag);
    }

    public function testNoLatestTage() {
        $i = $this->getBadGit();
        $tag = $i->getLatestTage();
        $this->assertFalse($tag);
    }

    public function testBranch() {
        $i = new GitInfoEnv();
        $branch = $i->getBranch();
        $this->assertNotFalse($branch);
    }

    public function testBadBranch() {
        $i = $this->getBadGit();
        $branch = $i->getBranch();
        $this->assertFalse($branch);
    }

    public function testHash() {
        $i = new GitInfoEnv();
        $hash = $i->getShortHash();
        $this->assertNotFalse($hash);
    }

    public function testNoHash() {
        $i = $this->getBadGit();
        $hash = $i->getShortHash();
        $this->assertFalse($hash);
    }

    public function testVersion() {
        $i = new GitInfoEnv();
        $version = $i->getVersion();
        $this->assertNotFalse($version);
    }

    public function testBadVersion() {
        $i = $this->getBadGit();
        $this->assertEquals('dev', $i->getVersion());
    }

    public function testDate() {
        $i = new GitInfoEnv();
        $this->assertNotFalse($i->getDate());
    }

    public function testBadDate() {
        $i = $this->getBadGit();
        $this->assertFalse($i->getDate());
    }

    public function testVersionString() {
        $i = new GitInfoEnv();
        $v = $i->getApplicationVersionString();
        $this->assertNotEquals('v.dev', $v);
    }

    public function testBadVersionString() {
        $i = $this->getBadGit();
        $v = $i->getApplicationVersionString();
        $this->assertEquals('v.dev.', $v);
    }

    private function getBadGit() {
        return new GitInfoEnv(BOGUS_COMMAND);
    }
}
