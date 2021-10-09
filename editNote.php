<?php
include("connectToDb.php");

$q = sprintf("UPDATE notes_data SET data = '%s' WHERE note_id = %d", $_POST["new_data"], $_POST["id"]);

echo $q . "<br>";
$res = $conn->query($q);

if($res)
{
    echo "Done";
}
else{
    echo "Failure";
}

$conn->close();

header("Location: index.php");
?>