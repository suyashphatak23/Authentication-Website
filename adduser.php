<?php
session_start();

// connecting mysql
$mysqli = new mysqli('localhost', 'root', '', 'php_examples');
    
// checking connection
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Storing values
$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

// Validation
if (strlen($fname) < 2) {
    echo 'fname';
} elseif (strlen($lname) < 2) {
    echo 'lname';
} elseif (strlen($email) < 2) {
    echo 'lname';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
    echo 'eformat';
} elseif (strlen($password) < 2) {
    echo 'pshort';
} else {
    // Password Encrypt
    $spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

    // Connecting database
    $query = "SELECT * FROM members WHERE email='$email'";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error());
    $num_row = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    if ($num_row < 1) {

        $insert_row = $mysqli->query("INSERT INTO members (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$spassword')");

        if ($insert_row) {

            $_SESSION['login'] = $mysqli->insert_id;
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;

            echo 'true';
        }
    } else {

        echo 'false';
    }
}
