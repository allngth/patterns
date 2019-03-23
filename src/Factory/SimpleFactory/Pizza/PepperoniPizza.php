<?php

namespace App\Factory\SimpleFactory\Pizza;

class PepperoniPizza extends Pizza
{
    public function prepare()
    {
        print_r("Preparing Pepperoni pizza \r\n");
    }

    public function bake()
    {
        print_r("Baking Pepperoni pizza \r\n");
    }

    public function cut()
    {
        print_r("Cutting Pepperoni pizza \r\n");
    }

    public function box()
    {
        print_r("Boxing Pepperoni pizza \r\n");
    }
}