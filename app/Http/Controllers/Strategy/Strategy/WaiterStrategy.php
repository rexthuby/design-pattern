<?php

namespace App\Http\Controllers\Strategy\Strategy;

use App\Http\Controllers\Strategy\Works\Waiter;

class WaiterStrategy implements StrategyWorkInterface
{
    /**
     * @param array $workData
     * @return int
     */
    public function calculate(array $workData): int
    {
        return (int)Waiter::$hourRate * $workData['workedHours'] + $workData['tablesServed'] * 0.1 + $workData['tips'] * 0.5;
    }
}
