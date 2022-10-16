<?php

namespace App\Http\Controllers\Bridge;

use App\Http\Controllers\Bridge\Realization\CategoryWidgetRealization;
use App\Http\Controllers\Bridge\Realization\ProductWidgetRealization;
use App\Http\Controllers\Bridge\Widget\WidgetBig;
use App\Http\Controllers\Bridge\Widget\WidgetSmall;

class PageController
{
    public function start()
    {
        $realizations = [
            new CategoryWidgetRealization(new Category()),
            new ProductWidgetRealization(new Product())
        ];
        $bigWidget = new WidgetBig();
        $smallWidget = new WidgetSmall();
        foreach ($realizations as $realization) {
            dump($bigWidget->setRealization($realization)->run(),
                $smallWidget->setRealization($realization)->run());
        }
    }
}
