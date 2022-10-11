<?php

namespace App\Http\Controllers\Strategy;

class PageController
{
    public function start()
    {
        $alexWorkData = ['work'=>'waiter', 'workedHours' => 180, 'tablesServed' => 1000, 'tips' => 1200];
        $alex = new Worker('Alex', $alexWorkData);
        $maxWorkData = ['work'=>'cook', 'workedHours' => 160, 'dishesCooked' => 700];
        $max = new Worker('Max', $maxWorkData);
        $workers = [$alex, $max];
        $salaryManager = new SalaryManager($workers);
        $workersSalary = $salaryManager->calculateUsersSalary();
        dump($workersSalary);
    }
}
