<?php

require_once __DIR__ . 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;
}
