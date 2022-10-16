<?php

namespace App\Http\Controllers\Bridge\Realization;

interface WidgetRealizationInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getDescription(): string;
}
