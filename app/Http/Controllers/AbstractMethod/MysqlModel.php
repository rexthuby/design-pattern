<?php

namespace App\Http\Controllers\AbstractMethod;

class MysqlModel extends AbstractMethod
{
    /**
     * @return ModelInterface
     */
    protected function getModel(): ModelInterface
    {
        return new MysqlConnection('root', 'root');
    }

}
