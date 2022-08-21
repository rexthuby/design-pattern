<?php

namespace App\Http\Controllers\PropertyContainer;

use App\Http\Controllers\PropertyContainer\BlogPost;
use App\Http\Controllers\PropertyContainer\PropertyPostContainer;

class PageController
{
    public function start()
    {
        $post = new BlogPost(new PropertyPostContainer());
        $post->setHeader('This is a header');
        $post->getContainer()->setProperty('color', 'green');
        $post->getContainer()->setProperty('type', 'text');
        dump($post);
    }
}
