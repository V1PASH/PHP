<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prac";


$name = $_POST['fname'];
$email = $_POST['email'];
$number = $_POST['number'];


$con = new mysqli($servername, $username, $password, $dbname);

print_r($con);

if ($con) {
    echo "Done";
}

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = $con->prepare("INSERT INTO data (uname, email, num) VALUES (?, ?, ?)");

$query->bind_param("sss", $name, $email, $number);

if ($query->execute()) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $query->error;
}
