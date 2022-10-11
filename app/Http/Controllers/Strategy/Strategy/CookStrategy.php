<?php

namespace App\Http\Controllers\Strategy\Strategy;

use App\Http\Controllers\Strategy\Works\Cook;

class CookStrategy implements StrategyWorkInterface
{
    /**
     * @param array $workData
     * @return int
     */
    public function calculate(array $workData): int
    {
        return (int)Cook::$hourRate * $workData['workedHours'] + $workData['dishesCooked'] * 2;
    }
}
