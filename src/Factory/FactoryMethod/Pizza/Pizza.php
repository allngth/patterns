<?php

namespace App\Factory\FactoryMethod\Pizza;

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = [];

    public function prepare(): void
    {
        print "Preparing " . $this->name . "\r\n";
        print "Tossing dough \r\n";
        print "Adding sauce...\r\n";
        print "Adding toppings:\r\n";

        foreach ($this->toppings as $topping) {
            print "   " . $topping . "\r\n";
        }
    }

    public function bake(): void
    {
        print "Bake for 25 minutes at 350\r\n";
    }

    public function cut(): void
    {
        print "Cutting the pizza into diagonal slices\r\n";
    }

    public function box(): void
    {
        print "Place pizza in official PizzaStore box\r\n";
    }

    public function getName(): string
    {
        return $this->name;
    }
}