<?php

namespace App\Http\Controllers\StaticFabric;

class PageController
{
    public function start()
    {
        dump(StaticFabric::build());
        dump(StaticFabric::build('sofa'));
    }
}
