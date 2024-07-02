<?php
session_start();
include "dbfuncs.php";
if (isset($_POST['submit'])) {
    if (!empty($_POST['Username']) && !empty($_POST['Password'])) {
        $conn = connectToDB();
        $verify = verifyuser($conn, $_POST['Username'], $_POST['Password']);
        if ($verify) {
            if (is_numeric($_POST['Username'])){
                $User = getname($conn, $_POST['Username']);
                $_SESSION['Username'] = $User;
                header('Location: Dashboard.php');
            }
            else{
                $_SESSION['Username'] = $_POST['Username'];
                header('Location: Dashboard.php');
            }
        } else {
            header('Location: index.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-dark text-white">
    <h1 class="text-center mb-5 mt-5">Welcome To The Task Manager </h1>
    <div class="bg-dark bg-gradient w-25 d-flex text-white text-center"
        style="height: 400px; justify-content: center; margin: 0 auto;">
        <form method="POST">
            <h3 class="mt-2">Login</h3><br><br>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="25"
                            fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                            <path
                                d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5" />
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        </svg></div>
                </div>
                <input type="text" class="form-control" name="Username" id="Username" placeholder="Username/Phone"
                    required>
            </div> <br><br>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="25"
                            fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        </svg></div>
                </div>
                <input type="password" class="form-control" name="Password" id="Password" placeholder="Password"
                    required>
            </div><br><br>

            <button class="btn btn-primary rounded-5" type="submit" name="submit" style="width: 100%;">Submit</button>
    </div>
    <p class="text-center">Don't own an account? <a href="Register.php">Register Here!</a></p>
</body>

</html>