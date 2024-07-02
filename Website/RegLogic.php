<?php
$error = false;
require_once 'dbfuncs.php';
$conn = connectToDB();


if (!$conn) {
    die("<div class='alert alert-danger'>Database connection failed: " . mysqli_connect_error() . "</div>");
}
$username = mysqli_real_escape_string($conn, trim($_POST['Username']));
$password = mysqli_real_escape_string($conn, trim($_POST['Password']));
$phone = mysqli_real_escape_string($conn, trim($_POST['PhoneNumber']));
$passhash = password_hash($password, PASSWORD_DEFAULT);

// Process the uploaded image file
if (isset($_FILES['image'])) {
    $image = $_FILES['image']['name'];
    $target_dir = "images/";
    $target_file = $target_dir . basename($image);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $validExtensions = array("jpg", "jpeg", "png");

    // Check if the image file type is valid
    if (!in_array($imageFileType, $validExtensions)) {
        echo "Invalid image file type <br>";
        $error = true;
    }

    // Move the uploaded file to the target directory
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        echo "Failed to upload image <br>";
        $error = true;
    }

    if (empty($target_file)) {
        echo "Please upload an image <br>";
        $error = true;
    }

    if (empty($username) || empty($password) || empty($image) || empty($phone)) {
        echo "Please fill in all fields <br>";
        $error = true;
    }

    if (isphoneused($conn, $phone)) {
        echo "Phone already in use <br>";
        $error = true;
    }

    if (nametake($conn, $username)) {
        echo "Username already in use <br>";
       $error = true;
    }

    $insert = insertuser($conn, $username, $passhash, $target_file, $phone);

    if ($insert) {
        header('Location: index.php');
    } else {
        echo "Failed to insert user into database";
    }

}
mysqli_close($conn);
?>
<a href="Register.php"
    style="background-color: #4CAF50; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 5px; border: none;">Back
    to registration</a>