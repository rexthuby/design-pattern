<?php

namespace App\Http\Controllers\Strategy;

class Worker
{
    private array $workData;
    private string $name;

    /**
     * @param string $name
     * @param array $workData
     * @throws \Exception
     */
    public function __construct(string $name, array $workData)
    {
        WorkDataValidation::workDataValidation($workData);
        $this->workData = $workData;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getWork(): string
    {
        return $this->workData['work'];
    }

    /**
     * @return array
     */
    public function getWorkData(): array
    {
        return $this->workData;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
