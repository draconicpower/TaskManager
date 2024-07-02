<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "dbfuncs.php";
$conn = connectToDB();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <title>Document</title>
</head>

<body class="bg-dark text-white">
    <?php
    include "Header.php";
    ?>
    <br>
    <div class="bg-dark bg-gradient w-25 d-flex text-white text-center"
        style="height: 700px; justify-content: center; margin: 0 auto;">
        <form action="InsertTaskLogic.php" method="POST" id="details">
            <h3 class="mt-2">Insert Task</h3><br><br>
            <label for="DateGiven">Date Given</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="inpwithut-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                            fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                            <path
                                d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                        </svg></div>
                </div>
                <input type="date" class="form-control" name="DateGiven" id="DateGiven" placeholder="DateGiven"
                    required>
            </div>
            <div class="error-container1" id="subject-error"></div><br>

            <label for="DateDue">Date Due</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                            fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                            <path
                                d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23" />
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                        </svg></div>
                </div>
                <input type="date" class="form-control" name="DateDue" id="DateDue" placeholder="DateDue" required>
            </div>
            <div class="error-container3" id="lecturer-error"></div><br>

            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                            fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                            <path
                                d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0M4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5m7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        </svg></div>
                </div>
                <input type="number" class="form-control" name="Marks" id="Marks" placeholder="Marks" required>
            </div>
            <div class="error-container2" id="assignment-error"></div><br>

            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                            fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                            <path
                                d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                        </svg></div>
                </div>
                <select class="form-control" name="Subject" id="Subject" placeholder="Subject" required>
                    <?php
                    // Connect to the database
                    // Query to fetch options from the database
                    $sql = "SELECT `SubjectID`, `Name` FROM `subject`"; // Assuming `subjects` is your table name
                    $result = mysqli_query($conn, $sql);

                    // Check if the query was successful
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Output an <option> element for each subject
                            echo '<option value="' . $row['SubjectID'] . '">' . $row['Name'] . '</option>';
                        }
                    } else {
                        // Output a default option if there are no subjects in the database
                        echo '<option value="" disabled>No subjects available</option>';
                    }

                    // Free the result set and close the database connection
                    mysqli_free_result($result);
                    ?>
                </select>
            </div>
            <div class="error-container4" id="semester-error"></div><br>

            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                            fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z" />
                            <path
                                d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z" />
                            <path fill-rule="evenodd"
                                d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z" />
                        </svg></div>
                </div>
                <input type="text" class="form-control" name="TaskName" id="TaskName" placeholder="TaskName" required>
            </div>
            <div class="error-container5" id="image-error"></div><br>

            <button class="btn btn-primary rounded-5" type="submit" name="submitButton"
                style="width: 100%;">Submit</button>
            <br><br>
            <div class="error-container"></div><br>
    </div>
    <?php
    include "Footer.php";
    ?>
</body>

<script>
    const validator = new JustValidate('#details');

    validator
        .addField('#DateGiven', [{
            rule: 'required',
            errorMessage: 'Please enter a valid date'
        }])
        .addField('#DateDue', [{
            rule: 'required',
            errorMessage: 'Please enter a valid date'
        }])
        .addField('#Marks', [{
            rule: 'required',
            errorMessage: 'Please enter a valid number'
        }])
        .addField('#Subject', [{
            rule: 'required',
            errorMessage: 'Please enter a valid subject'
        }])
        .addField('#TaskName', [{
            rule: 'required',
            errorMessage: 'Please enter a valid task name'
        }])
        .onSuccess((event) => {
            document.getElementById('details').submit();
        });
</script>

</html>