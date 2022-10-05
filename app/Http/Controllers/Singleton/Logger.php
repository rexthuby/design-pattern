<?php

namespace App\Http\Controllers\Singleton;

class Logger implements SingletonInterface
{
    use SingletonTrait;

    private $proprety = 'default';

    /**
     * @param $param
     * @return void
     */
    public function setProperty($param):void
    {
        $this->proprety = $param;
    }

    /**
     * @return string
     */
    public function getProperty()
    {
        return $this->proprety;
    }
}
