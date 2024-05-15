<?php

$name = trim($_POST['username']);
$number = trim($_POST['phnumber']);

if ($name == NULL || $number == NULL) {
    $message = 'NULL NOT ALLOWED';
    $msg = "<p style='color:red;'>".$message."</p>";
    echo $msg;
}

$server = 'localhost';
$user = 'root';
$pass = '_your_db_password';
$dbname = 'operators';

$conn = mysqli_connect($server, $user, $pass, $dbname);

$just = "SELECT * FROM phnum WHERE phnumber='$number'";

$insert = "INSERT INTO phnum (name, phnumber) VALUES ('$name', '$number')";

$query = mysqli_query($conn, $insert);

if ($query) {
    $message = 'Insertion Success';
    $msg = "<p style='color:green;'>".$message."</p>";
    echo $msg;
} elseif (mysqli_num_rows(mysqli_query($conn, $just)) > 0) {
    $message = 'Already Inserted';
    $msg = "<p style='color:red;'>".$message."</p>";
    echo $msg;
} else {
    $message = 'Insertion Failed';
    $msg = "<p style='color:red;'>".$message."</p>";
    echo $msg;
}

?>
