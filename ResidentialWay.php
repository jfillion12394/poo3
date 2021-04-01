<?php

final class ResidentialWay extends HighWay {


    public function addVehicle(Vehicle $vehicle) {
           $this->currentVehicles[]=$vehicle;
   }

   public function getCollection():array {
    return $this->currentVehicles;
   }
    
}