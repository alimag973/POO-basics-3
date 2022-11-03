<?php 

class Vehicle 
{
    public const V_MAX = 130;
    
    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->setNbSeats($nbSeats);
    }
    public function getColor() : string
    {
        return $this->color;
    }
    public function setColor($color) : self
    {
        $this->color = $color;
        return $this;
    }
    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }
    public function setNbSeats($nbSeats) : self
    {
        $this->nbSeats = ($nbSeats<0) ? 0 : $nbSeats;
        return $this;
    }
    public function getNbWheels() : int
    {
        return $this->nbWheels;
    }
    public function setNbWheels($nbWheels) : self
    {
        $this->nbWheels = ($nbWheels<0) ? 0 : $nbWheels;
        return $this;
    }
}