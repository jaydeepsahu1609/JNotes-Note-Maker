<?php

// INSERT NOTE DATA INTO DATABASE
$data = $_POST["note_data"];
if (strlen($data)) {

    include_once "connectToDb.php";

    date_default_timezone_set("Asia/Kolkata");

    $date = date("Y-m-d");
    $time = date("H:i:s");

    $q = "INSERT INTO notes_data(data, creation_date, creation_time) VALUES ('" . $data . "', '" . $date . "', '" . $time . "')";
    $res = $conn->query($q);

    // if($res)
    // {
    //     echo "<br>SUCCESS<br>";
    // }
    // else{
    //     echo "<br>FAILURE<br>";
    // }
    $conn->close();
    
    $_POST["note_data"] =  "";

}
header("Location: index.php");
