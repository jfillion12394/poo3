<?php

final class PedestrianWay extends HighWay {

    public function addVehicle(Vehicle $vehicle) {
        if($vehicle->getType()==="bike" || $vehicle->getType()==="skateboard")
        {
           $this->currentVehicles[]=$vehicle;
        }
       
   }

   public function getCollection():array {
    return $this->currentVehicles;
   }
}