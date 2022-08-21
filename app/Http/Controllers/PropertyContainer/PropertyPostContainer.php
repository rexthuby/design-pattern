<?php

namespace App\Http\Controllers\PropertyContainer;

use Exception;

class PropertyPostContainer implements PropertyContainerInterface
{
    /**
     * @var array
     */
    private array $container = [];

    /**
     * @param $key string
     * @param $value int|string
     * @return void
     */
    public function setProperty(string $key, string|int $value): void
    {
        $this->container[$key] = $value;
    }

    /**
     * @param $key string
     * @return string|integer|null
     */
    public function getProperty(string $key): string|int
    {
        return $this->container[$key];
    }

    public function deleteProperty(string $key): void
    {
        unset($this->container[$key]);
    }
}
