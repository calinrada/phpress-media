<?php

namespace Phpress\Tests;

use Phpress\Managers\MediaManager;
use Phalcon\DI;

class MediaManagerTest extends \PHPUnit_Framework_TestCase
{
    protected $media_manager;

    protected function setUp()
    {
        $modelsManager = DI::getDefault()->get('modelsManager');

        $this->media_manager = new MediaManager();
    }

    public function testFindFirst()
    {
        $result = $this->media_manager->findFirst();
        $this->assertFalse($result);
    }
}
