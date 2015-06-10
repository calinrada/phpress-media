<?php

namespace Phpress\Tests;

use Phpress\Models\Mysql\Media;
use Phpress\Managers\MediaManager;
use Phalcon\DI;

class MediaManagerTest extends \PHPUnit_Framework_TestCase
{
    protected $media_manager;

    protected function setUp()
    {
        $this->loadFixtures();

        $this->media_manager = new MediaManager();
    }

    protected function loadFixtures()
    {
        $fixtures = new \Phalcon\Config\Adapter\Php(__DIR__.'/../fixtures/mysql/media.php');
        $existing_media_records = Media::find();

        foreach ($existing_media_records as $record) {
            $record->delete();
        }

        foreach ($fixtures as $records) {
            foreach ($records as $record) {
                $media = new Media();
                $media->assign($record->toArray());
                if (false === $media->save()) {
                    foreach ($media->getMessages() as $message) {
                        throw new \PHPUnit_Framework_Exception($message->getMessage());
                    }
                }
            }
        }

    }

    public function testFindFirst()
    {
        $result = $this->media_manager->findFirst();
        $this->assertInstanceOf('Phpress\Models\Mysql\Media', $result);
        $this->assertEquals(1, $result->count());
    }
}
