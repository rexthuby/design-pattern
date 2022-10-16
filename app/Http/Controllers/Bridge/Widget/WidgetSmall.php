<?php

namespace App\Http\Controllers\Bridge\Widget;

class WidgetSmall extends BaseWidget
{

    function run(): string
    {
        $id = $this->getRealization()->getId();
        $name = $this->getRealization()->getName();
        $description = $this->getRealization()->getDescription();
        $result = 'id: ' . $id . ' | ' . $name . ' | ' . $description;
        return $result;
    }
}
