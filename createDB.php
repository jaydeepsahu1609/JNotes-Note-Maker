<!-- USE THIS CODE TO CREATE DATABASE FOR OUR PROJECT WHEN USING FIRST TIME -->
<!-- CREATED BY: JAYDEEP SAHU DATE:23.10.2020-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database setup</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div class="createDb-container">

        <div class="createDb-header">
            <div class="createDb-header-title">
                DATABASE SETUP UNIT
            </div>
            <div class="createDb-header-logo">
                JNOTES
            </div>
        </div>

        <br>

        <div class="createDb-main">
            <?php
            //create database connection
            include_once("connectToDb.php");


            if ($conn->connect_error) {
                echo "Failed to Connect to DataBase: " . $conn->connect_error;
            } else {
                // create database 'cms' if not exist
                $dbq = 'CREATE DATABASE cms;';
                $r = mysqli_query($conn, $dbq);
                if (!$r) {
                    echo "Database 'notesproject' already exist.<hr>";
                } else {
                    echo "Database 'notesproject' has been created.<hr>";
                }

                //use database 'cms'
                $udb = mysqli_select_db($conn, 'cms');
                if (!$udb) {
                    echo "Could not use database.<hr>" . mysqli_error($conn);
                } else {
                    echo "Database changed.<hr>";
                }

                //create table 'notes_data'  
                $ctdbq = "CREATE TABLE notes_data (id int(5) PRIMARY KEY AUTO_INCREMENT, data VARCHAR(1000) UNIQUE, creation_date DATE, creation_time TIME);";
                $r = mysqli_query($conn, $ctdbq);
                if (!$r) {
                    echo "ERROR:" . mysqli_error($conn) . "<hr>";
                } else {
                    echo "Table 'notes_data' has been created succesfully in the database.<hr>";
                }
            }
            ?>
        </div>


    </div>
</body>

</html>