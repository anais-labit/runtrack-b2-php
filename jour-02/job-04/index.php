<?php

function find_all_students_grades(): array
{

    $dsn = 'mysql:host=localhost;dbname=lp_official;charset=utf8';
    $password = (PHP_OS == 'Linux') ? '' : 'root';

    $db = new PDO($dsn, 'root', $password);

    $query = $db->prepare("SELECT email, fullname, name FROM student INNER JOIN grade ON student.id = grade.id");
    $query->execute();

    $students = $query->fetchAll(PDO::FETCH_ASSOC);

    return $students;
}

$result = find_all_students_grades();


?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job-04</title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>Liste des étudiants</th>
            </tr>
            <tr>
                <th>grade name</th>
                <th>email</th>
                <th>fullname</th>
            </tr>
        <tbody>
            <tr>
                <td>
                    <?php foreach ($result as $student) : ?>
            </tr>
            <tr>
                <td><?php echo $student['name'] ?></td>
                <td><?php echo $student['email'] ?></td>
                <td><?php echo $student['fullname'] ?></td>
            </tr>
        <?php endforeach; ?>
        </td>
        </tr>
        </tbody>

    </table>

</body>

</html>