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

$result = find_all_students();


?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job-01</title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>Liste des étudiants</th>
            </tr>
            <tr>
                <th>id</th>
                <th>grade_id</th>
                <th>email</th>
                <th>fullname</th>
                <th>birthdate</th>
                <th>gender</th>
            </tr>
        <tbody>
            <tr>
                <td>
                    <?php foreach ($result as $student) : ?>
            </tr>
            <tr>

                <td><?php echo $student['id'] ?></td>
                <td><?php echo $student['grade_id'] ?></td>
                <td><?php echo $student['email'] ?></td>
                <td><?php echo $student['fullname'] ?></td>
                <td><?php echo $student['birthdate'] ?></td>
                <td><?php echo $student['gender'] ?></td>
            </tr>
        <?php endforeach; ?>
        </td>
        </tr>
        </tbody>

    </table>

</body>

</html>