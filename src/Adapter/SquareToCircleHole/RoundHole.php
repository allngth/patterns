<?php

namespace App\Adapter\SquareToCircleHole;

class RoundHole implements RoundItem
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

    public function isFits(RoundItem $roundPeg): bool
    {
        return $this->getRadius() >= $roundPeg->getRadius();
    }
}
