<?php

namespace App\Http\Controllers\AbstractFabric;

interface AbstractFabricInterface
{
    /**
     * @param string $type
     * @return StyleFabricInterface
     */
    public function getFabric(string $type):StyleFabricInterface;
}
