<?php

class Grade
{

    private ?int $id;
    private ?int $gradeId;
    private ?string $name;
    private ?DateTime $year;

    public function __construct($id = null, $gradeId = null, $name = null, $year = null)
    {
        $this->id = $id;
        $this->gradeId = $gradeId;
        $this->name = $name;
        $this->year = $year;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setGrade(int $gradeId)
    {
        $this->id = $gradeId;
    }

    public function getGrade(): ?int
    {
        return $this->gradeId;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setYear(DateTime $year)
    {
        $this->year = $year;
    }

    public function getYear(): ?DateTime
    {
        return $this->year;
    }
}
