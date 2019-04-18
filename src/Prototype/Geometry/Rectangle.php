<?php

namespace App\Prototype\Geometry;

class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct(Rectangle $source = null)
    {
        parent::__construct($source);

        if ($source !== null) {
            $this->width = $source->width;
            $this->height = $source->height;
        }
    }

    public function clone()
    {
        return new Rectangle($this);
    }
}
