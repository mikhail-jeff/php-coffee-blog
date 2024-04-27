<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$host = 'localhost:3308';
$username = 'root@';
$db_password = '';
$database = 'perfectcup';

// Create connection
$mysqli = new mysqli($host, $username, $db_password , $database);


//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$query = "SELECT * FROM members WHERE email='$email'";
$result = mysqli_query($mysqli, $query);
if (!$result) {
    die('Error executing query: ' . mysqli_error($mysqli));
}
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row >= 1) {

    if (password_verify($password, $row['password'])) {

        $_SESSION['login'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        echo 'true';
    }
    else {
        echo 'false';
    }

} else {
    echo 'false';
}

?>