<?php

namespace App\Http\Controllers\Strategy\Works;

class Cook extends BaseWork
{
    static array $rules = ['dishesCooked'];
    static int $hourRate = 10;
}
