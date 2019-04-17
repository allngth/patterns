<?php

use App\Factory\AbstractFactory\GUI\Application;
use App\Factory\AbstractFactory\GUI\Element\MacButton;
use App\Factory\AbstractFactory\GUI\Element\MacCheckbox;
use App\Factory\AbstractFactory\GUI\Element\WinButton;
use App\Factory\AbstractFactory\GUI\Element\WinCheckbox;
use App\Factory\AbstractFactory\GUI\Factory\MacFactory;
use App\Factory\AbstractFactory\GUI\Factory\WinFactory;

class GUIAbstractFactoryCest
{
    public function _before()
    {
        print_r(PHP_EOL);
    }

    public function testWinElements(UnitTester $I)
    {
        $factory = new WinFactory();

        $application = new Application($factory);
        $application->createUI();

        $I->assertInstanceOf(WinButton::class, $application->getButton());
        $I->assertInstanceOf(WinCheckbox::class, $application->getCheckBox());
    }
    public function testMacElements(UnitTester $I)
    {
        $factory = new MacFactory();

        $application = new Application($factory);
        $application->createUI();

        $I->assertInstanceOf(MacButton::class, $application->getButton());
        $I->assertInstanceOf(MacCheckbox::class, $application->getCheckBox());
    }
}
