<?php

require_once 'dbfuncs.php';

$conn = connectToDB();

$DateGiven = $_POST['DateGiven'];
$DateDue = $_POST['DateDue'];
$Marks = $_POST['Marks'];
$Subject = $_POST['Subject'];
$TaskName = $_POST['TaskName'];
$result = insertTask($conn, $DateGiven, $DateDue, $Marks, $Subject, $TaskName);
header("Location: Tasks.php");
