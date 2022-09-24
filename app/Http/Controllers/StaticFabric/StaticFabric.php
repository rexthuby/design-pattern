<?php

namespace App\Http\Controllers\StaticFabric;

use App\Http\Controllers\SimpleFabric\Phone;
use App\Http\Controllers\SimpleFabric\PhoneInterface;
use App\Http\Controllers\SimpleFabric\Sofa;
use App\Http\Controllers\SimpleFabric\SofaInterface;

class StaticFabric
{
    /**
     * @param string $fabricName phone, sofa
     * @return Phone|Sofa
     * @throws \Exception
     */
    static function build(string $fabricName='phone')
    {
        switch ($fabricName) {
            case 'phone':
                $fabric = new Phone;
                $fabric->setSize(147, 71);
                $fabric->setBrand('Apple');
                $fabric->setModel('iPhone 12');
                break;
            case 'sofa':
                $fabric = new Sofa;
                $fabric->setBrand('Kairos');
                $fabric->setSize(218, 136);
                break;
            default:
                throw new \Exception('Wrong fabric type');
        }
        return $fabric;
    }
}
