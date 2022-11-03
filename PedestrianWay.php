<?php 

require_once './HighWay.php';

final class MotorWay extends HighWay
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50; 

    public function addVehicle(Vehicle $vehicle)
     {
        if (($vehicle instanceof Bike) && ($vehicle instanceof Skateboard)) {
        
        $this->setcurrentVehicles($vehicle);   
        }
    }
}