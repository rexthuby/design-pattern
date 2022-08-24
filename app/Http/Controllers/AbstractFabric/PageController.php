<?php

namespace App\Http\Controllers\AbstractFabric;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function start()
    {
        $abstractFabric = new AbstractFabric();

        $appleFabric = $abstractFabric->getFabric('Apple');
        $androidFabric = $abstractFabric->getFabric('Android');

        $result = [];
        $result[] = $androidFabric->getButton();
        $result[] = $androidFabric->getForm();
        $result[] = $appleFabric->getButton();
        $result[] = $appleFabric->getForm();

        dump($appleFabric, $androidFabric, $result);
    }
}
