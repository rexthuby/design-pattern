<?php

namespace App\Http\Controllers\AbstractFabric;

class AbstractFabric implements AbstractFabricInterface
{

    /**
     * Choose fabric what you will use
     *
     * @param string $type
     * @return StyleFabricInterface
     * @throws \Exception
     */
    public function getFabric(string $type): StyleFabricInterface
    {
        switch ($type) {
            case 'Apple':
                $fabric = new AppleFabric;
                break;
            case 'Android':
                $fabric = new AndroidFabric;
                break;
            default:
                throw new \Exception('Wrong fabric type');
        }
        return $fabric;
    }
}
