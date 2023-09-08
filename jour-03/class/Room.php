<?php

class Room
{

    private ?int $id;
    private ?int $floorId;
    private ?string $name;
    private ?int $capacity;

    public function __construct($id = null, $floorId = null, $name = null, $capacity = null)
    {
        $this->id = $id;
        $this->floorId = $floorId;
        $this->name = $name;
        $this->capacity = $capacity;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setFloor(int $floorId)
    {
        $this->id = $floorId;
    }

    public function getFloor(): ?int
    {
        return $this->floorId;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setCapacity(int $capacity)
    {
        $this->capacity = $capacity;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }
}
