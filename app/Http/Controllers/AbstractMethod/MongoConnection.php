<?php

namespace App\Http\Controllers\AbstractMethod;

class MongoConnection implements ModelInterface
{
    /**
     * @var string
     */
    private string $login;

    /**
     * @var string
     */
    private string $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @param string $query
     * @return string
     */
    public function query(string $query):string
    {
        return join('/', [$query, $this->password, $this->login]);
    }
}
