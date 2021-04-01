<?php
final class Car extends Vehicle {
    

    private string $type;

    public function __construct(string $color, int $nbSeats, string $type="car")
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->type = $type;
    }

    public function getType():string {
        return $this->type;
    }

}