<?php

namespace App\Http\Controllers\Strategy;

use App\Http\Controllers\Strategy\Strategy\StrategyWorkInterface;
use App\Http\Controllers\Strategy\Works\BaseWork;
use Exception;

class SalaryManager
{
    /**
     * @var array
     */
    private array $workers;

    public function __construct(array $workers)
    {
        $this->workersValidation($workers);
        $this->workers = $workers;
    }

    /**
     * @return array
     */
    public function calculateUsersSalary(): array
    {
        $func = function (Worker $worker) {
            $strategy = $this->getStrategyByWorker($worker);
            $salary = $strategy->calculate($worker->getWorkData());
            return [$worker->getName() => $salary];
        };
        return array_map($func, $this->workers);
    }

    /**
     * @param Worker $worker
     * @return StrategyWorkInterface
     */
    private function getStrategyByWorker(Worker $worker)
    {
        $strategyClass = __NAMESPACE__ . '\Strategy\\' . ucwords($worker->getWork()).'Strategy';
        if (!class_exists($strategyClass)) {
            throw new Exception("Class [$strategyClass] not defined");
        }
        return new $strategyClass;
    }

    private function workersValidation(array $workers)
    {
        $baseWorkClass = BaseWork::class;
        foreach ($workers as $worker) {
            if (is_subclass_of($worker, $baseWorkClass)) {
                throw new Exception("$worker not extends [$baseWorkClass]");
            }
        }
    }
}
