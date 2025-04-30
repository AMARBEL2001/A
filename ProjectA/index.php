<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="email" name="A" id="" placeholder="Email" required>
        <input type="password" name="B" id="" placeholder="Password" required>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
$data = array(
    'Amarbelacel16@gmail.com' => 'A',
    'Amarbelacel15@gmail.com' => 'ABCD'
);

if (isset($_POST['A']) && isset($_POST['B'])) {
    if (!array_key_exists($_POST['A'], $data)) {
        echo "Email not found";
    } else {
        if ($data[$_POST['A']] != $_POST['B']) {
            echo "Password is incorrect";
        } else {
            //echo "Login successful";
            session_start();
            $_SESSION['user'] = $_POST['A'];
            header("Location: One.php");
        }
    }

    // $email = $_POST['A'];
    // $password = $_POST['B'];
}