<?php

namespace App\Decorator\Starbuzz;

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = 'House Blend Coffee';
    }

    public function cost(): float
    {
        return .89;
    }
}