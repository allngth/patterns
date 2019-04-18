<?php

namespace App\Builder\AutoBuilder;

class CarBuilder extends Builder
{
    /** @var Car */
    private $car;

    public function reset()
    {
        $this->car = new Car();
    }

    public function setSeats()
    {
        // TODO: Implement setSeats() method.
    }

    public function setEngine()
    {
        // TODO: Implement setEngine() method.
    }

    public function setTripComputer()
    {
        // TODO: Implement setTripComputer() method.
    }

    public function setGPS()
    {
        // TODO: Implement setGPS() method.
    }

    public function getResult()
    {
        return $this->car;
    }
}
