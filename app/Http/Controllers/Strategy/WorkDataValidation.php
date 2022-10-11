<?php

namespace App\Http\Controllers\Strategy;

use App\Http\Controllers\Strategy\Works\BaseWork;
use Barryvdh\Debugbar\Facades\Debugbar;
use Exception;

class WorkDataValidation
{
    static function workDataValidation($workData)
    {
        foreach (BaseWork::$baseWorkDataRules as $rule) {
            if (!key_exists($rule, $workData)) {
                throw new \Exception("[$rule] key do not exists in array");
            }
        }
        $workStr = 'App\Http\Controllers\Strategy\Works\\' . ucwords($workData['work']);
        $work = new $workStr;
        $rules = $work::$rules;
        foreach ($rules as $rule) {
            if (!key_exists($rule, $workData)) {
                dd($rule, $workData);
                throw new Exception("rule [$rule] not exists in array");
            }
        }
    }
}
