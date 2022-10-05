<?php

namespace App\Http\Controllers\LazyLoad;

use phpDocumentor\Reflection\Types\Void_;

class LazyLoad
{
    private User|null $user = null;

    public function setUser(string $username)
    {
        if (is_null($this->user)) {
            $this->user = new User();
            echo 'user init';
            return;
        }
        $this->user->setName($username);
    }
}
