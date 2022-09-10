<?php

namespace App\Http\Controllers\AbstractMethod;

class MysqlConnection implements ModelInterface
{

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @param string $login
     * @param string $password
     */
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
        return join('|', [$query, $this->password, $this->login]);
    }
}
