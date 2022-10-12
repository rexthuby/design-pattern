<?php

namespace App\Http\Controllers\Adapter;

interface AdapterInterface
{
    /**
     * @return string
     */
    public function getPhoto(): string;

    /**
     * @return string
     */
    public function getVideo(): string;
}
