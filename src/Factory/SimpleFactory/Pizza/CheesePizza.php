<?php

namespace App\Factory\SimpleFactory\Pizza;

class CheesePizza extends Pizza
{
    public function prepare()
    {
        print_r("Preparing cheese pizza \r\n");
    }

    public function bake()
    {
        print_r("Baking cheese pizza \r\n");
    }

    public function cut()
    {
        print_r("Cutting cheese pizza \r\n");
    }

    public function box()
    {
        print_r("Boxing cheese pizza \r\n");
    }
}