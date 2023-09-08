<?php 

require_once './class/Student.php';

$student = new Student();

$student->id = 1;
$student->gradeId = 1;
$student->email = "email@email.com";
$student->fullname ="Terry";
$student->birthdate = new DateTime("1990-01-03");
$student->gender = "male";

$student2 = new Student(1, 1, "ana@ana.com", "ana", new DateTime("1990-05-30"), "female");

