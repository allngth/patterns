<?php

namespace App\Adapter\SquareToCircleHole;

class RoundPeg implements RoundItem
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }
}
