<?php

namespace App\Http\Controllers\Bridge\Widget;

use App\Http\Controllers\Bridge\Realization\WidgetRealizationInterface;

abstract class BaseWidget
{
    protected WidgetRealizationInterface $realization;

    public function setRealization(WidgetRealizationInterface $realization)
    {
        $this->realization = $realization;
        return $this;
    }

    public function getRealization()
    {
        return $this->realization;
    }

    abstract function run():string;
}
