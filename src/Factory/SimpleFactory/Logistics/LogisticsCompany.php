<?php

namespace App\Factory\SimpleFactory\Logistics;

class LogisticsCompany
{
    private $transportFactory;

    public function __construct(TransportFactory $transportFactory)
    {
        $this->transportFactory = $transportFactory;
    }

    public function transfer(string $from, string $to, string $transportName)
    {
        $transport = $this->transportFactory->getTransport($transportName);
        $transport->deliver($from, $to);

        return $transport;
    }
}
