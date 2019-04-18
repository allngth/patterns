<?php

namespace App\Bridge\Remote;

class AdvancedRemote extends Remote
{
    public function mute()
    {
        $this->device->setVolume(0);
    }
}
