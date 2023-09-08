<?php

class Student
{

    private ?int $id;
    private ?int $gradeId;
    private ?string $email;
    private ?string $fullname;
    private ?DateTime $birthdate;
    private ?string $gender;

    public function __construct($id = null, $gradeId = null, $email = null, $fullname = null, $birthdate = null, $gender = null)
    {
        $this->id = $id;
        $this->gradeId = $gradeId;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
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

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setFullname(string $fullname)
    {
        $this->fullname = $fullname;
    }

    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    public function setBirthdate(DateTime $birthdate)
    {
        $this->birthdate = $birthdate;
    }

    public function getBirthdate(): ?DateTime
    {
        return $this->birthdate;
    }

    public function setGender(string $gender)
    {
        $this->gender = $gender;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }
}
