<?php

namespace App\Prototype\Geometry;

abstract class Shape
{
    public $x;
    public $y;
    public $color;

    public function __construct(Shape $source = null)
    {
        if ($source !== null) {
            $this->x = $source->x;
            $this->y = $source->y;
            $this->color = $source->color;
        }
    }

    abstract public function clone();
}
