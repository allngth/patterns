<?php

namespace App\Builder\AutoBuilder;

abstract class Builder
{
    abstract public function reset();

    abstract public function setSeats();

    abstract public function setEngine();

    abstract public function setTripComputer();

    abstract public function setGPS();

    abstract public function getResult();
}
