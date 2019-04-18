<?php

use App\Prototype\Geometry\Circle;
use App\Prototype\Geometry\Rectangle;

class GeometryPrototypeCest
{
    public function testCloneRectangle(UnitTester $I)
    {
        $rectangle = new Rectangle();
        $rectangle->x = 10;
        $rectangle->y = 20;
        $rectangle->height = 100;
        $rectangle->width = 200;

        $rectangleClone = $rectangle->clone();

        $I->assertTrue($rectangle->x === $rectangleClone->x);
        $I->assertTrue($rectangle->y === $rectangleClone->y);
        $I->assertTrue($rectangle->height === $rectangleClone->height);
        $I->assertTrue($rectangle->width === $rectangleClone->width);
    }

    public function testCloneCircle(UnitTester $I)
    {
        $circle = new Circle();
        $circle->x = 10;
        $circle->y = 20;
        $circle->radius = 50;

        $circleClone = $circle->clone();

        $I->assertTrue($circleClone->x === $circleClone->x);
        $I->assertTrue($circleClone->y === $circleClone->y);
        $I->assertTrue($circleClone->radius === $circleClone->radius);
    }
}
