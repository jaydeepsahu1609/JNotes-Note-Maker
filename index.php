<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon.jpg" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">


    <!-- STYLE-SHEETS -->
    <link rel="stylesheet" href="css/style.css">
    <title>JNOTES.in</title>
</head>

<body>

    <div class="container">

        <header>
            <div class="logo">
                JNOTES.in
            </div>
        </header>
        <!-- CODE TO FETCH & THEN DISPLAY NOTES FROM THE DATABASE -->
        <div class="boxes" id="box_container">
            <?php
            include("displayNotes.php");
            ?>
        </div>


















        <!-- CODE TO TAKE A NOTE FROM USER -->
        <form method="post" action="addToDb.php" id="submitionForm">
            <div class="options">
                <textarea name="note_data" id="note_text" cols="30" rows="10" placeholder="WRITE YOUR NOTE HERE"></textarea>
                <button type="submit" class="create-button" onclick="reloadWindow()">CREATE A NOTE</button>

            </div>
        </form>













        <!-- CODE TO INSERT NOTE INTO DATABASE -->
        <?php
        // include("addToDb.php");
        ?>


    </div>
</body>

<script src="js/main.js"></script>



</html>