<?php

namespace App\Factory\SimpleFactory\Pizza;

abstract class Pizza
{
    abstract public function prepare();

    abstract public function bake();

    abstract public function cut();

    abstract public function box();
}