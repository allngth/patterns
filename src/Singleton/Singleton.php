<?php

namespace App\Singleton;

class Singleton
{
    protected static $uniqueInstance;

    protected $id;

    private function __construct()
    {
        $this->id = rand(1, 1000);

        print "Initialize new instance\r\n";
    }

    public static function getInstance(): Singleton
    {
        if (null === self::$uniqueInstance) {
            self::$uniqueInstance = new Singleton();
        }

        return self::$uniqueInstance;
    }

    public function getId()
    {
        return $this->id;
    }
}
