<?php

namespace App\Singleton;

class Singleton
{
    protected static $uniqueInstance;

    private function __construct()
    {
        print "Initialize new instance\r\n";
    }

    public static function getInstance(): Singleton
    {
        if (null === self::$uniqueInstance) {
            self::$uniqueInstance = new Singleton();
        }

        return self::$uniqueInstance;
    }
}