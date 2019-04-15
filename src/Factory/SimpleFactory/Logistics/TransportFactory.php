<?php

namespace App\Factory\SimpleFactory\Logistics;

class TransportFactory
{
    public function getTransport(string $type): Transport
    {
        $transport = null;

        if ($type === 'truck') {
            $transport = new Truck();
        }

        if (!$transport instanceof Transport) {
            // todo: throw exception
        }

        return $transport;
    }
}
