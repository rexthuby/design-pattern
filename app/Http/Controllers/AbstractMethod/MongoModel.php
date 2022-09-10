<?php

namespace App\Http\Controllers\AbstractMethod;

class MongoModel extends AbstractMethod
{

    /**
     * @return ModelInterface
     */
    protected function getModel(): ModelInterface
    {
        return new MongoConnection('MongoUser', '1234');
    }

}
