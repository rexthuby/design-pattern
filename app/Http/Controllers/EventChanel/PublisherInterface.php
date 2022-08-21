<?php

namespace App\Http\Controllers\EventChanel;

interface PublisherInterface
{
    public function publish(string $title): array;
}
