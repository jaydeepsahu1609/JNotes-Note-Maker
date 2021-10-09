<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Edit/Delete</title>
    <style>
        body{
            background-image: url("images/bg2.jpg");
        }
    </style>
</head>

<body>

    <?php
    if (isset($_POST["edit"])) {
    ?>
        <div>
            <ul>
                <li class="data">
                    <form action="editNote.php" method="post">

                        <input type="text" name="id" value= <?php echo $_POST["id"];?> hidden>
                        <textarea name="new_data" value="new_data" id="new_data" cols="30" rows="10">

                        <?php
                        include_once("connectToDb.php");

                        $q = "SELECT data FROM notes_data WHERE note_id = " . $_POST["id"];

                        $res = $conn->query($q);

                        while ($row = $res->fetch_assoc()) {
                            echo $row["data"];
                        }

                        $conn->close();
                        ?>
                        </textarea>
                        <br>
                        <center><button type="submit">EDIT</button></center>
                    </form>

                </li>
            </ul>
        </div>



    <?php
    } else if (isset($_POST["delete"])) {
        include_once("connectToDb.php");

        echo "<script type='text/javascript'>
            let conf = confirm('Are you sure to Delete?');
            if(!conf)
            {
                window.location.href = 'index.html';
            }<script>";

        $q = "DELETE FROM notes_data WHERE note_id = " . $_POST["id"];
        $res = $conn->query($q);


        $conn->close();
        header("Location: index.php");
    }
    ?>


</body>

</html>