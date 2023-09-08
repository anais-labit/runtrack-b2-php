<?php

class Room
{

    public ?int $id;
    public ?int $floorId;
    public ?string $name;
    public ?int $capacity;

    public function __construct($id = null, $floorId = null, $name = null, $capacity = null)
    {
        $this->id = $id;
        $this->floorId = $floorId;
        $this->name = $name;
        $this->capacity = $capacity;
    }
}
