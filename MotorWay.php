<?php


abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicles;

    /**
     * @var int
     */
    protected $nbLane;

    /**
     * @var int
     */
    protected $maxSpeed;

    function getCurrentVehicle(): array
    {
        $this->currentVehicles;
    }

    function setCurrentVehicle(array $currentVehicles) : void
    {
        $this->currentVehicles = $currentVehicles;
    }

    function getNbLane(): int
    {
        $this->nbLane;
    }

    function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    function getMaxSpeed(): int
    {
        $this->maxSpeed;
    }

    function setMaxSpeed(array $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle();
}
