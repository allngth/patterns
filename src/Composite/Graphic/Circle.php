<?php

namespace App\Composite\Graphic;

class Circle extends Dot
{
    public $radius;

    public $circleCount = 0;

    public function __construct($x, $y, $radius)
    {
        $this->radius += $radius;

        parent::__construct($x, $y);
    }

    public function draw()
    {
        $this->circleCount += 1;
    }
}
