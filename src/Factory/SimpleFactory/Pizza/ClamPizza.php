<?php

namespace App\Factory\SimpleFactory\Pizza;

class ClamPizza extends Pizza
{
    public function prepare()
    {
        print_r("Preparing Clam pizza \r\n");
    }

    public function bake()
    {
        print_r("Baking Clam pizza \r\n");
    }

    public function cut()
    {
        print_r("Cutting Clam pizza \r\n");
    }

    public function box()
    {
        print_r("Boxing Clam pizza \r\n");
    }
}