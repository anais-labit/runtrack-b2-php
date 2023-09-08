<?php

class Grade
{

    public ?int $id;
    public ?int $gradeId;
    public ?string $name;
    public ?DateTime $year;

    public function __construct($id = null, $gradeId = null, $name = null, $year = null)
    {
        $this->id = $id;
        $this->gradeId = $gradeId;
        $this->name = $name;
        $this->year = $year;
    }
}
