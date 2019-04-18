<?php

namespace App\Composite\Graphic;

class CompoundGraphic implements GraphicInterface
{
    /** @var GraphicInterface[] */
    protected $children = [];

    public function add(GraphicInterface $graphic)
    {
        $this->children[] = $graphic;
    }

    public function move($x, $y)
    {
        foreach ($this->children as $child) {
            $child->move($x, $y);
        }
    }

    public function draw()
    {
        foreach ($this->children as $child) {
            $child->draw();
        }
    }
}
