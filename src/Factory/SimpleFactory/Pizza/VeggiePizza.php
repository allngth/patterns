<?php

namespace App\Factory\SimpleFactory\Pizza;

class VeggiePizza extends Pizza
{

    public function prepare()
    {
        print_r("Preparing Veggie pizza \r\n");
    }

    public function bake()
    {
        print_r("Baking Veggie pizza \r\n");
    }

    public function cut()
    {
        print_r("Cutting Veggie pizza \r\n");
    }

    public function box()
    {
        print_r("Boxing Veggie pizza \r\n");
    }
}