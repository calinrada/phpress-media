<?php

namespace Phpress\Managers;

use Phpress\Models\Mysql\Media;

class MediaManager extends \Phalcon\Mvc\User\Component
{
    public function findFirst($parameters = null)
    {
        return Media::findFirst($parameters);
    }
}
