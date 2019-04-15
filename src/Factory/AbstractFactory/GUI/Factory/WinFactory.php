<?php

namespace App\Factory\AbstractFactory\GUI\Factory;

use App\Factory\AbstractFactory\GUI\Element\Button;
use App\Factory\AbstractFactory\GUI\Element\Checkbox;
use App\Factory\AbstractFactory\GUI\Element\WinButton;
use App\Factory\AbstractFactory\GUI\Element\WinCheckbox;

class WinFactory extends GUIFactory
{
    public function createButton(): Button
    {
        print_r("Create win button\n");

        return new WinButton();
    }

    public function createCheckbox(): Checkbox
    {
        print_r("Create win checkbox\n");

        return new WinCheckbox();
    }
}
