<?php

namespace App\Composite\Graphic;

class Dot implements GraphicInterface
{
    public $x;
    public $y;

    public $dotCount = 0;

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
        $this->dotCount += 1;
    }
}
