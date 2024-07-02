<?php
session_start();
include "dbfuncs.php";
$conn = connectToDB();
?>
<?php
if (isset($_POST['submit'])) {
    if (isset($_FILES['image'])) {
        $image = $_FILES['image']['name'];
        $target_dir = "images/";
        $target_file = $target_dir . basename($image);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $validExtensions = array("jpg", "jpeg", "png");
        $userID = getid($conn, $_SESSION['Username']);
        $result = updatepicture($conn, $userID, $target_file);
        if ($result)
            header("Location: Dashboard.php");

        // Check if the image file type is valid
        if (!in_array($imageFileType, $validExtensions)) {
            echo "<div class='alert alert-danger'>Invalid image format. Only JPG, JPEG, and PNG files are allowed.</div>";
            return;
        }

        // Move the uploaded file to the target directory
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            echo "<div class='alert alert-danger'>Failed to upload the designated file.</div>";
            return;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body data-bs-theme="dark">
    <?php
    include "Header.php";
    ?>
    <?php
    $id = getid($conn, $_SESSION['Username']);
    if (isAdmin($conn, $id)) {
        // Admin dashboard
        echo '<div data-bs-theme="dark" class="card">';
        echo '<div class="card-body">';
        echo '<h1 class="card-title">Admin Center</h1>';
        echo '<p class="card-text">You are a registered admin. Welcome, ' . htmlspecialchars($_SESSION['Username']) . '.</p>';

        // Retrieve all users from the database
        $users = getUsers($conn);

        // Render table of users and actions
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">ID</th>';
        echo '<th scope="col">Username</th>';
        echo '<th scope="col">Manage</th>';
        echo '<th scope="col">Delete</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        // Loop through each user
        foreach ($users as $user) {
            echo '<tr>';
            echo '<th scope="row">' . htmlspecialchars($user['UserID']) . '</th>';
            echo '<td>' . htmlspecialchars($user['Username']) . '</td>';

            // Check if the user is an admin
            if (isAdmin($conn, $user['UserID'])) {
                // Provide link to remove admin status
                echo '<td>';
                echo '<a href="manage.php?id=' . urlencode($user['UserID']) . '&action=remove" class="btn btn-danger">Remove Admin</a>';
                echo '</td>';
            } else {
                // Provide link to make admin
                echo '<td>';
                echo '<a href="manage.php?id=' . urlencode($user['UserID']) . '&action=add" class="btn btn-success">Make Admin</a>';
                echo '</td>';
            }
            echo '<td>';
            echo '<a href="manage.php?id=' . urlencode($user['UserID']) . '&action=delete1" class="btn btn-danger">Delete</a>';
            echo '</td>';
            echo '</tr>';
        }

        // Provide delete account link
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        echo '</div>';
    }

    ?>
    <h1 class="text-center">Profile</h1>
    <div class="account-info-container text-center">
        <!-- Display the profile picture -->
        <div class="d-flex justify-content-center">

            <img src="<?php
            $userID = getid($conn, $_SESSION['Username']);
            $pic = getpicture($conn, $userID);
            echo $pic; ?>" alt="Profile Picture" class="img-thumbnail profile-pic"
                style="max-width: 500px; max-height: 500px;">
        </div>
        <!-- Display account name -->
        <div class="account-name">
            <h3 class="text-center">Your Username is :
                <?php echo $_SESSION['Username']; // Replace with the actual account name ?>
            </h3>
        </div>
        <br>
        <a href="logout.php" type="submit" class="btn btn-danger">Logout</a>
        <?php
        $userID = getid($conn, $_SESSION['Username']);
        echo '<a href="manage.php?id=' . urlencode($userID) . '&action=delete2" class="btn btn-danger">Delete</a>'
            ?>
        <br><br>
        <!-- Update profile picture button -->
        <form method="POST" enctype="multipart/form-data" class="update-pfp-form">
            <input type="file" name="image" class="form-control-file">
            <button type="submit" name="submit" class="btn btn-success">Update Profile Picture</button>
        </form>
    </div>
    <?php
    include "Footer.php";
    ?>
</body>

</html>