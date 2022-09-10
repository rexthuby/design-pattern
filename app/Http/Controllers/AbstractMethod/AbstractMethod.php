<?php

namespace App\Http\Controllers\AbstractMethod;

abstract class AbstractMethod
{
    /**
     * @var ModelInterface
     */
    protected ModelInterface $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    /**
     * @return ModelInterface
     */
    abstract protected function getModel(): ModelInterface;


    public function getUsers():string
    {
        return $this->model->query('SELECT * FROM users');
    }
}
