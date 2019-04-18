<?php

namespace App\Composite\Graphic;

interface GraphicInterface
{
    public function move($x, $y);

    public function draw();
}
