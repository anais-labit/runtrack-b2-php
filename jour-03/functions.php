<?php

require_once './class/Student.php';
require_once './class/Grade.php';
require_once './class/Room.php';
require_once './class/Floor.php';

function findOneStudent(int $id): Student
{
    $dsn = 'mysql:host=localhost;dbname=lp_official;charset=utf8';
    $password = (PHP_OS == 'Linux') ? '' : 'root';

    $db = new PDO($dsn, 'root', $password);

    $query = $db->prepare("SELECT * FROM student WHERE id = :id");
    $query->execute([
        ':id' => $id,
    ]);

    $student = $query->fetch(PDO::FETCH_ASSOC);

    return new Student($student['id'], $student['grade_id'], $student['email'], $student['fullname'], new DateTime($student['birthdate']), $student['gender']);
}

findOneStudent(2);


function findOneGrade(int $id): Grade
{
    $dsn = 'mysql:host=localhost;dbname=lp_official;charset=utf8';
    $password = (PHP_OS == 'Linux') ? '' : 'root';

    $db = new PDO($dsn, 'root', $password);

    $query = $db->prepare("SELECT * FROM grade WHERE id = :id");
    $query->execute([
        ':id' => $id,
    ]);

    $grade = $query->fetch(PDO::FETCH_ASSOC);

    return new Grade($grade['id'], $grade['room_id'], $grade['name'], new DateTime($grade['year']));
}

findOneGrade(2);

function findOneFloor(int $id): Floor
{
    $dsn = 'mysql:host=localhost;dbname=lp_official;charset=utf8';
    $password = (PHP_OS == 'Linux') ? '' : 'root';

    $db = new PDO($dsn, 'root', $password);

    $query = $db->prepare("SELECT * FROM floor WHERE id = :id");
    $query->execute([
        ':id' => $id,
    ]);

    $floor = $query->fetch(PDO::FETCH_ASSOC);

    return new Floor($floor['id'], $floor['name'], $floor['level']);
}

function findOneRoom(int $id): Room {

    $dsn = 'mysql:host=localhost;dbname=lp_official;charset=utf8';
    $password = (PHP_OS == 'Linux') ? '' : 'root';

    $db = new PDO($dsn, 'root', $password);

    $query = $db->prepare("SELECT * FROM room WHERE id = :id");
    $query->execute([
        ':id' => $id,
    ]);

    $room = $query->fetch(PDO::FETCH_ASSOC);

    return new Room($room['id'], $room['floor_id'], $room['name'], $room['capacity']);
}

findOneRoom(2);