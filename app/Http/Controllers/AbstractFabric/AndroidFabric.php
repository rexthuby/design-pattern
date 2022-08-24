<?php

namespace App\Http\Controllers\AbstractFabric;

class AndroidFabric implements StyleFabricInterface
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
        $this->button = 'Android button';
        $this->form = 'Android form';
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
