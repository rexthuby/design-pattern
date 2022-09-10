<?php

namespace App\Http\Controllers\AbstractMethod;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function start()
    {
        $mongo = new MongoModel();
        $mysql = new MysqlModel();
        $result['mongo'][] = $mongo->getUsers();
        $result['mysql'][] = $mysql->getUsers();
        dump($result);
    }
}
