<?php

namespace App\Http\Controllers\Strategy\Works;

class Waiter extends BaseWork
{
    static array $rules = ['tablesServed', 'tips'];
    static int $hourRate = 10;
}
