<?php

function connectToDB()
{
    $conn = mysqli_connect("localhost", "root", "", "taskm_db");
    return $conn;
}

function insertuser($conn, $username, $passhash, $image, $phone)
{
    $sql = "INSERT INTO `users`(`Username`,`Password`,`image`,`Phonenumber` ) VALUES ('$username', '$passhash','$image','$phone');";
    $result = mysqli_query($conn, $sql);

    return $result;
}

function InsertSubject($conn, $subject, $lecturer, $Assignments, $Semester, $Image)
{
    $sql = "INSERT INTO `subject`(`Name`, `Lecturer`, `Assignments`, `Semester`, `Image`) VALUES 
    ('$subject', '$lecturer','$Assignments','$Semester','$Image');";
    $result = mysqli_query($conn, $sql);

    return $result;
}

function InsertTask($conn, $DG, $DD, $Marks, $Sid, $TN)
{
    $sql = "INSERT INTO `task`(`DateGiven`, `DateDue`, `Marks`, `SubjectID`, `TaskName`) VALUES 
    ('$DG', '$DD','$Marks','$Sid','$TN');";
    $result = mysqli_query($conn, $sql);

    return $result;
}

function getid($conn, $username)
{
    $sql = "SELECT `UserID` FROM `users` WHERE `Username` = '$username';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['UserID'] ?? null;
}
function getpicture($conn, $UserID)
{
    $sql = "SELECT `image` FROM `users` WHERE `UserID` = '$UserID';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['image'] ?? null;
}

function verifyuser($conn, $input, $password)
{
    $sql = "SELECT * FROM `users` WHERE `Username` = '$input' OR `Phonenumber` = '$input';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        if (password_verify($password, $row['Password']));
        return true;
    } else {
        return false;
    }
}

function isAdmin($conn, $ID)
{
    // SQL query to select the Admin column from the users table based on the username
    $sql = "SELECT `Admin` FROM `users` WHERE `UserID` = '$ID';";

    // Execute the query and check if there was an error
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        // If the query failed, return false or handle the error as you see fit
        return false;
    }

    // Fetch the result as an associative array
    $row = mysqli_fetch_assoc($result);

    // Check if a row was fetched
    if ($row) {
        // Return true if the Admin column is set to 1, false otherwise
        return $row['Admin'] == 1;
    } else {
        // If no row was found, return false
        return false;
    }
}


function showsubjects($conn)
{
    $sql = "SELECT * FROM `subject`;";
    $result = mysqli_query($conn, $sql);

    return $result;
}

function showtask($conn)
{
    // SQL query that joins task and subject tables using SubjectID
    $sql = "SELECT t.*, s.Name, s.Lecturer, s.Image
            FROM `task` t
            JOIN `subject` s ON t.SubjectID = s.SubjectID;";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query execution was successful
    if (!$result) {
        // If the query failed, provide an error message
        die("Query failed: " . mysqli_error($conn));
    }

    // Return the result if successful
    return $result;
}
function deletetask($conn, $subjectID)
{
    $sql = "DELETE FROM `task` WHERE `TaskID` = $subjectID;";
    $result = mysqli_query($conn, $sql);

    return $result;
}

function Getusers($conn)
{
    $sql = "SELECT * FROM `users`;";
    $result = mysqli_query($conn, $sql);

    return $result;
}

function promoteadmin($conn, $userID)
{
    $sql = "UPDATE `users` SET `Admin` = 1 WHERE `UserID` = '$userID';";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function demoteadmin($conn, $userID)
{
    $sql = "UPDATE `users` SET `Admin` = 0 WHERE `UserID` = '$userID';";
    $result = mysqli_query($conn, $sql);

    return $result;
}

function deleteuser($conn, $userID)
{
    $sql = "DELETE FROM `users` WHERE `UserID` = $userID;";
    $result = mysqli_query($conn, $sql);

    return $result;
}

function updatepicture($conn, $userID, $image)
{
    $sql = "UPDATE `users` SET `image` = '$image' WHERE `UserID` = '$userID';";
    $result = mysqli_query($conn, $sql);

    return $result;
}

function fetchOptionsFromDB($conn)
{
    $sql = "SELECT * FROM `subject`;";
    $result = mysqli_query($conn, $sql);

    return $result;
}

function isphoneused($conn, $phone)
{
    $sql = "SELECT * FROM `users` WHERE `Phonenumber` = '$phone';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        return true;
    } else {
        return false;
    }
}

function nametake($conn, $name)
{
    $sql = "SELECT * FROM `users` WHERE `Username` = '$name';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        return true;
    } else {
        return false;
    }
}

function getname($conn, $phone)
{
    $sql = "SELECT `Username` FROM `users` WHERE `Phonenumber` = '$phone';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['Username'] ?? null;
}