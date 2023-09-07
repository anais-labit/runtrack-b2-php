<?php

function find_all_students(): array
{

    $dsn = 'mysql:host=localhost;dbname=lp_official;charset=utf8';
    $password = (PHP_OS == 'Linux') ? '' : 'root';

    $db = new PDO($dsn, 'root', $password);

    $query = $db->prepare("SELECT * FROM student");
    $query->execute();

    $students = $query->fetchAll(PDO::FETCH_ASSOC);

    return $students;
}

find_all_students();
