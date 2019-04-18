<?php

namespace App\Adapter\SquareToCircleHole;

class SquarePeg
{
    private $width;

    public function __construct($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }
}
