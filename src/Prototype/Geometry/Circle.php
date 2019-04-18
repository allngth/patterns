<?php

namespace App\Prototype\Geometry;

class Circle extends Shape
{
    public $radius;

    public function __construct(Circle $source = null)
    {
        parent::__construct($source);

        if ($source !== null) {
            $this->radius = $source->radius;
        }
    }

    public function clone()
    {
        return new Circle($this);
    }
}
