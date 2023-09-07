<?php

function insert_student(int $grade_id, string $email, string $fullname, DateTime $birthdate, string $gender): void
{

    $dsn = 'mysql:host=localhost;dbname=lp_official;charset=utf8';
    $password = (PHP_OS == 'Linux') ? '' : 'root';

    $db = new PDO($dsn, 'root', $password); {

        $request_create_student = "INSERT INTO student
        (grade_id, email, fullname, birthdate, gender) 
        VALUES (:grade_id, :email, :fullname, :birthdate, :gender)";

        $query_create_student = $db->prepare($request_create_student);

        $query_create_student->execute([
            ':grade_id' => $grade_id,
            ':email' => $email,
            ':fullname' => $fullname,
            ':birthdate' => $birthdate->format('Y-m-d'),
            ':gender' => $gender,
        ]);
    }
}

if (isset($_POST['submit'])) {

    $grade_id = $_POST['input-grade_id'];
    $email = $_POST['input-email'];
    $fullname = $_POST['input-fullname'];
    $birthdate = $_POST['input-birthdate'];
    $birthdate = new DateTime($birthdate);
    $gender = $_POST['input-gender'];

    insert_student($grade_id, $email, $fullname, $birthdate, $gender);

    echo 'Success !';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job-03</title>
</head>

<body>

    <form id="form" action="index.php" method="post">
        <label id="legend" for="legend">Register a new student :</label>

        <label id="input-email" for="input-email"></label>
        <input type="email" name="input-email" id="input-email" placeholder="email" required>

        <label id="input-fullname" for="input-fullname"></label>
        <input type="text" name="input-fullname" id="input-fullname" placeholder="fullname" required>

        <label for="input-gender"></label>
        <select name="input-gender" id="input-gender">
            <option value="">Select a gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <label id="input-birthdate" for="input-birthdate"></label>
        <input type="date" name="input-birthdate" id="input-birthdate" placeholder="birthdate">

        <label id="input-grade_id" for="input-grade_id"></label>
        <input type="number" name="input-grade_id" id="input-grade_id" placeholder="grade_id" required>

        <button name="submit" type="submit">Submit</button>
    </form>


</body>

</html>