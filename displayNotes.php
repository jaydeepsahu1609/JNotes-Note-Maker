<?php

include_once("connectToDb.php");

$q = "SELECT * FROM notes_data";

$res = $conn->query($q);

while ($notes = $res->fetch_assoc()) {

?>
    <div class="box">
        <form action="updateNotes.php" method="post">
            <input type="text" name="id" value=<?php echo $notes["note_id"]; ?> hidden>

            <ul>
                <li class="data">
                    <?php
                    echo $notes["data"];
                    ?>
                </li>
                <li class="note-options">
                    <span class="edit">
                        <button type="submit" name="edit" value="EDIT" class="box-button">
                            EDIT
                        </button>
                    </span>

                    <span class="delete">
                        <button type="submit" name="delete" value="DELETE" class="box-button">
                            DELETE
                        </button>
                    </span>
                </li>
                <li class="date-time">
                    <span>
                        <?php
                        echo $notes["creation_date"];
                        ?>
                    </span>

                    <span>
                        <?php
                        echo $notes["creation_time"];
                        ?>
                    </span>
                </li>


        </form>
    </div>


<?php
}
$conn->close();
?>