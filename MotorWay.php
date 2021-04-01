<?php

final class MotorWay extends HighWay {

    public function addVehicle(Vehicle $vehicle) {
         if($vehicle->getType()==="car")
         {
            $this->currentVehicles[]=$vehicle;
         }
        
    }

    public function getCollection():array {
     return $this->currentVehicles;
    }

}