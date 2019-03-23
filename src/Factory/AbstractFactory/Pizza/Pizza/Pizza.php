<?php

namespace App\Factory\AbstractFactory\Pizza\Pizza;

abstract class Pizza
{
    protected $name;

    protected $dough;
    protected $sauce;
    protected $cheese;
    protected $veggies;
    protected $pepperoni;
    protected $clam;

    abstract public function prepare(): void;

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

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString()
    {
        /** echo Pizza's description */
    }
}