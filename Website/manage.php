<?php
session_start();
include "dbfuncs.php";

$conn = connectToDB();
$UserID = $_GET['id'];
$action = $_GET['action'];
$filepath = getpicture($conn, $UserID);


if ($action == 'add') {
    $result = promoteadmin($conn, $UserID);
    header("Location: Dashboard.php");

} elseif ($action == 'delete1') {
    $result = deleteuser($conn, $UserID);
    header("Location: Dashboard.php");
} elseif ($action == 'delete2') {
    $result = deleteuser($conn, $UserID);
    header("Location: logout.php");
} else {
    $result = demoteadmin($conn, $UserID);
    header("Location: Dashboard.php");
}
