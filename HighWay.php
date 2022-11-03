<?php

require_once './Vehicle.php;';

abstract class HighWay
{
    protected array $currentVehicle;
    protected int $nbLane;
    protected int $maxSpeed;

    abstract public function addVehicle(Vehicle $vehicle);

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
    public function setCurrentVehicles($currentVehicles): self
     {
        $this->currentVehicles = $currentVehicles;

       return $this;
    }
    
    
    

    public function getnbLane(): int 
    {
        return $this->nbLane;
    }
    public function setnbLane($nbLane): self 
    {
        $this->nbLane = $nbLane;
        return $this;
    }
    public function getmaxSpeed(): int 
    { 
        return $this->maxSpeed;
    }
    public function setMaxSpeed($maxSpeed): self 
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }
}