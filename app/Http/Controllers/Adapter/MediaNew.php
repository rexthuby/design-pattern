<?php

namespace App\Http\Controllers\Adapter;

class MediaNew
{
    public function getNewPhoto():string
    {
        return 'Photo';
    }

    public function getNewVideo():string
    {
        return 'Video';
    }

    public function updatePhoto():string
    {
        return __METHOD__;
    }
}
