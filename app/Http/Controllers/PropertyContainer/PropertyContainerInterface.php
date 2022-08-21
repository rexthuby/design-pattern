<?php

namespace App\Http\Controllers\PropertyContainer;

interface PropertyContainerInterface
{
    /**
     * @param $key string
     * @param $value mixed
     * @return void
     */
    public function setProperty(string $key, string|int $value): void;

    /**
     * @param $key string
     * @return string|int
     */
    public function getProperty(string $key): string|int;

    /**
     * @param $key string
     * @return void
     */
    public function deleteProperty(string $key): void;
}
