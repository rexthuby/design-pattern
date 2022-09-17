<?php

namespace App\Http\Controllers\SimpleFabric;

class SimpleFabric
{
    /**
     * @param string $fabricName phone, sofa
     * @return SofaInterface|PhoneInterface
     * @throws \Exception
     */
    public function build(string $fabricName): SofaInterface|PhoneInterface
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
