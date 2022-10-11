<?php

namespace App\Http\Controllers\Strategy\Works;

use App\Http\Controllers\Strategy\PaymentCalculation;
use App\Http\Controllers\Strategy\Worker;

abstract class BaseWork
{
    static array $workList = ['cook', 'waiter'];
    static array $baseWorkDataRules = ['work', 'workedHours'];
    static array $rules = [];
    static int $hourRate;

    /**
     * @return array
     */
    static function getRules()
    {
        return static::$rules;
    }

    /**
     * @return int
     */
    static function getHourRate()
    {
        return static::$hourRate;
    }
}
