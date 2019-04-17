<?php

namespace App\Factory\AbstractFactory\GUI;

use App\Factory\AbstractFactory\GUI\Element\Button;
use App\Factory\AbstractFactory\GUI\Element\Checkbox;
use App\Factory\AbstractFactory\GUI\Factory\GUIFactory;

class Application
{
    private $button;
    private $checkbox;

    /**
     * @var GUIFactory
     */
    private $GUIFactory;

    public function __construct(GUIFactory $GUIFactory)
    {
        $this->GUIFactory = $GUIFactory;
    }

    public function createUI()
    {
        $this->button = $this->GUIFactory->createButton();
        $this->checkbox = $this->GUIFactory->createCheckbox();
    }

    public function getButton(): Button
    {
        return $this->button;
    }

    public function getCheckBox(): Checkbox
    {
        return $this->checkbox;
    }
}
