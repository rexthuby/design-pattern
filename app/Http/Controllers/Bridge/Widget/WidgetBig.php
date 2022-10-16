<?php

namespace App\Http\Controllers\Bridge\Widget;

class WidgetBig extends BaseWidget
{

    function run(): string
    {
        $description = $this->getRealization()->getDescription();
        $fullName = $this->getFullName();
        $result = $fullName . '   ' . 'description:' . $description;
        return $result;
    }

    public function getFullName()
    {
        return $this->getRealization()->getId()
            . '. ' .
            $this->getRealization()->getName();
    }
}
