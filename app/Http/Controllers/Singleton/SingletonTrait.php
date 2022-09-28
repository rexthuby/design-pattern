<?php

namespace App\Http\Controllers\Singleton;

trait SingletonTrait
{
    private static $instance = null;

    public function __construct()
    {
        //
    }

    public function __clone(): void
    {
        //
    }

    public function __wakeup(): void
    {
        //
    }

    public static function getInstance(): static
    {
        return static::$instance ?? (static::$instance = new static());
    }

}
