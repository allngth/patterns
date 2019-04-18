<?php

namespace App\Adapter\SquareToCircleHole;

class SquarePegAdapter implements RoundItem
{
    private $squarePeg;

    public function __construct(SquarePeg $squarePeg)
    {
        $this->squarePeg = $squarePeg;
    }

    public function getRadius()
    {
        return sqrt(2 * pow($this->squarePeg->getWidth(), 2)) / 2;
    }
}
