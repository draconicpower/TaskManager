<?php
include "dbfuncs.php";
?>

<?php

$TaskID = $_GET['TaskID'];

$conn = connectToDB();
$result = deletetask($conn, $TaskID);


if($result)
    header("Location: Tasks.php");
