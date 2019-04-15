<?php

namespace App\Factory\AbstractFactory\GUI\Factory;

use App\Factory\AbstractFactory\GUI\Element\Button;
use App\Factory\AbstractFactory\GUI\Element\Checkbox;

abstract class GUIFactory
{
    abstract public function createButton(): Button;

    abstract public function createCheckbox(): Checkbox;
}
