<?php

namespace App\Bridge\Remote;

abstract class Device
{
    abstract public function isEnabled();

    abstract public function enable();

    abstract public function disable();

    abstract public function getVolume();

    abstract public function setVolume($percent);

    abstract public function getChannel();

    abstract public function setChannel($channel);
}
