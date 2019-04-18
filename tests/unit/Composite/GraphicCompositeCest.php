<?php

use App\Composite\Graphic\Circle;
use App\Composite\Graphic\CompoundGraphic;
use App\Composite\Graphic\Dot;

class GraphicCompositeCest
{
    public function testGraphic(UnitTester $I)
    {
        $graphic = new CompoundGraphic();

        $circle1 = new Circle(0, 0, 5);
        $circle2 = new Circle(5, 5, 10);

        $dot1 = new Dot(0, 0);
        $dot2 = new Dot(10, 10);

        $graphic->add($circle1);
        $graphic->add($circle2);
        $graphic->add($dot1);
        $graphic->add($dot2);

        $graphic->move(1000, 2000);
        $graphic->draw();
        $graphic->draw();
        $graphic->draw();

        $I->assertTrue($circle1->x === 1000);
        $I->assertTrue($circle1->y === 2000);
        $I->assertTrue($circle1->circleCount === 3);

        $I->assertTrue($circle2->x === 1005);
        $I->assertTrue($circle2->y === 2005);
        $I->assertTrue($circle2->circleCount === 3);

        $I->assertTrue($dot1->x === 1000);
        $I->assertTrue($dot1->y === 2000);
        $I->assertTrue($dot1->dotCount === 3);

        $I->assertTrue($dot2->x === 1010);
        $I->assertTrue($dot2->y === 2010);
        $I->assertTrue($dot2->dotCount === 3);
    }
}
