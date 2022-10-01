<?php

namespace App\Http\Controllers\Multiton;

trait MultitonTrait
{
    protected static array $instances = [];
    private string $name;

    public function __construct()
    {
        //
    }

    public function __wakeup(): void
    {
        //
    }

    public function __clone(): void
    {
        //
    }

    /**
     * @param string $instanceName
     * @return self
     */
    public static function getInstance(string $instanceName): self
    {
        if (in_array($instanceName,static::$instances)) {
            return static::$instances[$instanceName];
        }
        static::$instances[$instanceName] = new static();
        static::$instances[$instanceName]->setName($instanceName);
        return static::$instances[$instanceName];
    }

    public function setName($name): void
    {
        $this->name = $name;
    }
}
