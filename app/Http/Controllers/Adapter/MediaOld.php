<?php

namespace App\Http\Controllers\Adapter;

class MediaOld
{
    public function getPhoto():string
    {
        return 'Photo';
    }

    public function getVideo():string
    {
        return 'Video';
    }
}
