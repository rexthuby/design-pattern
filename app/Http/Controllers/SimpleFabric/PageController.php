<?php

namespace App\Http\Controllers\SimpleFabric;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function start()
    {
        $fabric = new SimpleFabric();
        $phone = $fabric->build('phone');
        $sofa = $fabric->build('sofa');
        dump($phone, $sofa);
    }
}
