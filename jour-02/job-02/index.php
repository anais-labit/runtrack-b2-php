<?php

function find_one_student(string $email): array
{

    $dsn = 'mysql:host=localhost;dbname=lp_official;charset=utf8';
    $password = (PHP_OS == 'Linux') ? '' : 'root';

    $db = new PDO($dsn, 'root', $password);

    $query = $db->prepare("SELECT * FROM student WHERE email = :email");
    $query->execute([':email' => $email]);

    $student = $query->fetchAll(PDO::FETCH_ASSOC);

    return $student;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job-02</title>
</head>

<body>

    <form id="form" action="index.php">
        <label id="input-email-student" for="input-email-student">Rentrez un email :</label>
        <input type="text" name="input-email-student" id="input-email-student" required>
        <button type="submit">Lancer la rechercher</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Information sur l'étudiant</th>
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
                    <?php if (!empty(($_GET['input-email-student']))) {
                        foreach (find_one_student($_GET['input-email-student']) as $student) : ?>
            </tr>
            <tr>
                <td><?php echo $student['id'] ?></td>
                <td><?php echo $student['grade_id'] ?></td>
                <td><?php echo $student['email'] ?></td>
                <td><?php echo $student['fullname'] ?></td>
                <td><?php echo $student['birthdate'] ?></td>
                <td><?php echo $student['gender'] ?></td>
            </tr>
    <?php endforeach;
                    } ?>
    </td>
    </tr>
        </tbody>

    </table>
</body>

</html>