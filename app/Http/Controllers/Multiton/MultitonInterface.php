<?php

namespace App\Http\Controllers\Multiton;

use phpDocumentor\Reflection\Types\Void_;

interface MultitonInterface
{
    static function getInstance(string $instanceName):self;
}
