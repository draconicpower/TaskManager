<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "dbfuncs.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body class="bg-dark text-light">
    <?php
    include "Header.php";
    ?>
    <h1 class="text-center">Subjects Page</h1>
    <table class="table table-hover table-dark m-4">
        <tr>
            <th class="text-center" scope="col">ID</th>
            <th class="text-center" scope="col">Subject Name</th>
            <th class="text-center" scope="col">Subject Lecturer</th>
            <th class="text-center" scope="col">Subject Assignments</th>
            <th class="text-center" scope="col">Semester Subject is in</th>
            <th class="text-center" scope="col">Image</th>
        </tr>
        <?php
        $conn = connectToDB();
        $result = showsubjects($conn);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td class="text-center align-middle"><?php echo $row['SubjectID'] ?></td>
                    <td class="text-center align-middle"><?php echo $row['Name'] ?></td>
                    <td class="text-center align-middle"><?php echo $row['Lecturer'] ?></td>
                    <td class="text-center align-middle"><?php echo $row['Assignments'] ?></td>
                    <td class="text-center align-middle"><?php echo $row['Semester'] ?></td>
                    <td class="text-center align-middle">
                        <img src="<?php echo $row['Image'] ?>" alt="<?php echo $row['Name'] ?>" width="200" height="100">
                    </td>
                </tr>
                <?php
            }
        }
        ?>
        <?php
        include "Footer.php";
        ?>
</body>

</html>