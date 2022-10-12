<?php

namespace App\Http\Controllers\Adapter;

class PageController
{
    public function start()
    {
        $result = [];
        $mediaLibrary = new MediaLibraryAdapter();
        $result[] = $mediaLibrary->getPhoto();
        $result[] = $mediaLibrary->getVideo();
        $result[] = $mediaLibrary->updatePhoto();
        dump($result);
    }
}
