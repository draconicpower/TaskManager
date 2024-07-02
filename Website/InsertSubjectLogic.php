<?php
        require_once 'dbfuncs.php';

        $conn = connectToDB();
        $subject = mysqli_real_escape_string($conn, trim($_POST['Subject']));
        $lecturer = mysqli_real_escape_string($conn, trim($_POST['Lecturer']));
        $assignments = mysqli_real_escape_string($conn, trim($_POST['Assignments']));
        $semester = mysqli_real_escape_string($conn, trim($_POST['Semester']));
        $image = mysqli_real_escape_string($conn, trim($_POST['Image']));
        $insert = InsertSubject($conn, $subject, $lecturer, $assignments, $semester, $image);

        header("Location: Subject.php")
?>