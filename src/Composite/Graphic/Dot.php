<?php

namespace App\Composite\Graphic;

class Dot implements GraphicInterface
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function move($x, $y)
    {
        $this->x += $x;
        $this->y += $y;
    }

    public function draw()
    {
        // TODO: Draw dot
    }
}
