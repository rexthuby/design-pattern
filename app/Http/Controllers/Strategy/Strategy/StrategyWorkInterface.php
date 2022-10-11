<?php

namespace App\Http\Controllers\Strategy\Strategy;

interface StrategyWorkInterface
{
    /**
     * @param array $workData
     * @return int
     */
    public function calculate(array $workData):int;
}
