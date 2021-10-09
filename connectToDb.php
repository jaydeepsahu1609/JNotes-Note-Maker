<?php

$host = "localhost";
$user = "root";
$db = "notesproject";
$pwd = "";


$conn = new mysqli($hostname = $host, $username = $user, $password = $pwd, $database = $db);


if ($conn->connect_error) {
    echo "Failed to Connect to DataBase: " . $conn->connect_error;
}


?>
