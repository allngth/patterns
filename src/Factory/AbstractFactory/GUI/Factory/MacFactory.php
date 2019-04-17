<?php

namespace App\Factory\AbstractFactory\GUI\Factory;

use App\Factory\AbstractFactory\GUI\Element\Button;
use App\Factory\AbstractFactory\GUI\Element\Checkbox;
use App\Factory\AbstractFactory\GUI\Element\MacButton;
use App\Factory\AbstractFactory\GUI\Element\MacCheckbox;

class MacFactory extends GUIFactory
{
    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new MacCheckbox();
    }
}
