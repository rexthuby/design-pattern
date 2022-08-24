<?php

namespace App\Http\Controllers\AbstractFabric;

class AppleFabric implements StyleFabricInterface
{
    /**
     * @var string
     */
    private string $button;

    /**
     * @var string
     */
    private string $form;

    public function __construct()
    {
        $this->button = 'Apple button';
        $this->form = 'Apple form';
    }

    /**
     * @return string
     */
    public function getButton(): string
    {
        return $this->button;
    }

    /**
     * @return string
     */
    public function getForm(): string
    {
        return $this->form;
    }
}
