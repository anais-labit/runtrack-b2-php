<?php 

require_once './class/Student.php';
require_once './class/Grade.php';
require_once './class/Room.php';
require_once './class/Floor.php';

//

$student = new Student();

$student->id = 1;
$student->gradeId = 1;
$student->email = "email@email.com";
$student->fullname ="Terry";
$student->birthdate = new DateTime("1990-01-03");
$student->gender = "male";

$student2 = new Student(1, 1, "ana@ana.com", "ana", new DateTime("1990-05-30"), "female");

//

$grade = new Grade();

$grade->id = 1;
$grade->gradeId = 8;
$grade->name = "Bachelor 1";
$grade->year = new DateTime("2023-01-09");

$grade2 = new Grade(2, 3, "Start", new DateTime("2022-10-03"));

// 

$room = new Room();

$room->id = 1;
$room->floorId = 2;
$room->name = "Sound Studio";
$room->capacity = 5;

$room2 = new Room(4, 2, "Cowork 1", 80);

//

$floor = new Floor();

$floor->id = 1;
$floor->name ="Rez-de-chaussée";
$floor->level = 0;

$floor2 = new Floor(2, "1er étage", 1);
