<?php

namespace App\Builder\AutoBuilder;

class Director
{
    public function constructSportCar(Builder $builder)
    {
        $builder->reset();
        $builder->setSeats();
        $builder->setEngine();
        $builder->setTripComputer();
        $builder->setGPS();
    }
}
