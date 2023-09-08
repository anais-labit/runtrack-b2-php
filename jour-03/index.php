<?php

require_once './class/Student.php';
require_once './class/Grade.php';
require_once './class/Room.php';
require_once './class/Floor.php';

//

$student = new Student();

$id = 1;
$gradeId = 1;
$email = "email@email.com";
$fullname = "Terry";
$birthdate = new DateTime("1990-01-03");
$gender = "male";

$student2 = new Student(1, 1, "ana@ana.com", "ana", new DateTime("1990-05-30"), "female");

$id = $student->setId($id);
$gradeId = $student->setGrade($gradeId);
$email = $student->setEmail($email);
$fullname = $student->setFullname($fullname);
$birthdate = $student->setBirthdate($birthdate);
$gender = $student->setGender($gender);

$id = $student->getId();
$gradeId = $student->getGrade();
$email = $student->getEmail();
$fullname = $student->getFullname();
$birthdate = $student->getBirthdate();
$gender = $student->getGender();

//

$grade = new Grade();

$id = 1;
$gradeId = 8;
$name = "Bachelor 1";
$year = new DateTime("2023-01-09");

$grade2 = new Grade(2, 3, "Start", new DateTime("2022-10-03"));

$id = $grade->setId($id);
$gradeId = $grade->setGrade($gradeId);
$name = $grade->setName($name);
$year = $grade->setYear($year);

$id = $grade->getId();
$gradeId = $grade->getGrade();
$name = $grade->getName();
$year = $grade->getYear();

//

$room = new Room();

$id = 1;
$floorId = 2;
$name = "Sound Studio";
$capacity = 5;

$room2 = new Room(4, 2, "Cowork 1", 80);

$id = $room->setId($id);
$floorId = $room->setFloor($floorId);
$name = $room->setName($name);
$capacity = $room->setCapacity($capacity);

$id = $room->getId();
$floorId = $room->getFloor();
$name = $room->getName();
$capacity = $room->getCapacity();

//

$floor = new Floor();

$id = 1;
$name ="Rez-de-chaussée";
$level = 0;

$floor2 = new Floor(2, "1er étage", 1);

$id = $floor->setId($id);
$name = $floor->setName($name);
$level = $floor->setLevel($level);

$id = $floor->getId();
$name = $floor->getName();
$level = $floor->getLevel();