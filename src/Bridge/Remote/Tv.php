<?php

namespace App\Bridge\Remote;

class Tv extends Device
{
    const MAX_CHANNEL_ID = 100;

    private $isEnabled = false;
    private $volume = 0;
    private $channel = 1;

    public function isEnabled()
    {
        return $this->isEnabled;
    }

    public function enable()
    {
        $this->isEnabled = true;
    }

    public function disable()
    {
        $this->isEnabled = false;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($percent)
    {
        $percent = $percent > 100 ? 100 : $percent;
        $percent = $percent < 0 ? 0 : $percent;

        $this->volume = $percent;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    public function setChannel($channel)
    {
        $channel = $channel > 100 ? 1 : $channel;
        $channel = $channel < 1 ? 100 : $channel;

        $this->channel = $channel;
    }
}
