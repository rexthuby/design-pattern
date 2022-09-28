<?php

namespace App\Http\Controllers\Singleton;

class Logger
{
    use SingletonTrait;

    private $proprety = 'default';

    /**
     * @param $param
     * @return void
     */
    public function setProprety($param):void
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
