<?php

require_once './HighWay.php';

final class MotorWay extends HighWay
{

    protected int $nbLane=4;
    protected int $maxSpeed=130;

    public function addVehicle(Vehicle $vehicle) 
    {
        if (!($vehicle instanceof Bike) && !($vehicle instanceof SkateBoard))
        {
            return "Not allowed here <br><br>";
        }else {
            $this->currentVehicules[] = $vehicle;
            return 'This vehicule is allowed <br><br>';
        }
    }
   
    }
