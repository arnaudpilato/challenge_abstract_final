<?php

require_once __DIR__ . '/HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct() {
        $this->nbLane = 2;
        $this->maxSpeed = 50;
    }

    public function addVehicle()
    {
        if ($this instanceof Vehicle) {
            $currentVehicle[] = $this;
        }
    }
}
