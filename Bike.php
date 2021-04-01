<?php
final class Bike extends Vehicle {
    

    private string $type;

    public function __construct(string $color, int $nbSeats, string $type="bike")
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->type = $type;
    }

    public function getType():string {
        return $this->type;
    }

}