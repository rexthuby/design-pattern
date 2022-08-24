<?php

namespace App\Http\Controllers\AbstractFabric;

interface StyleFabricInterface
{
    /**
     * @return string
     */
    public function getButton():string;

    /**
     * @return string
     */
    public function getForm():string;
}
