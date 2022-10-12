<?php

namespace App\Http\Controllers\Adapter;

class MediaLibraryAdapter implements AdapterInterface
{
    private $mediaLibrary;

    public function __construct()
    {
        $this->mediaLibrary = new MediaNew();
    }

    public function getPhoto(): string
    {
        return $this->mediaLibrary->getNewPhoto();
    }

    public function getVideo(): string
    {
        return $this->mediaLibrary->getNewVideo();
    }

    public function __call(string $name, array $arguments)
    {
        if (method_exists($this->mediaLibrary, $name)) {
            return call_user_func_array([$this->mediaLibrary, $name], $arguments);
        } else {
            throw new \Exception("Method [$name] not exists");
        }
    }
}
