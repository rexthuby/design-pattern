<?php

namespace App\Http\Controllers\LazyLoad;

class PageController
{
    public function start()
    {
        $lazyLoad = new LazyLoad();
        $lazyLoad->setUser('Max');
        $lazyLoad->setUser('Kira');
        dump($lazyLoad);
    }
}
