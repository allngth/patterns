<?php

namespace App\Builder\AutoBuilder;

class CarManualBuilder extends Builder
{
    /** @var Manual */
    private $manual;

    public function reset()
    {
        $this->manual = new Manual();
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
        return $this->manual;
    }
}
