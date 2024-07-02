<?php
session_start();
include "dbfuncs.php";
?>

<!DOCTYPE html>
<html lang="en">

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
        <form method="POST" action="InsertSubjectLogic.php" id="details">
            <h3 class="mt-2">Insert Subject</h3><br><br>
            <div class="input-group mb-2 mr-sm-2">
                <div class="inpwithut-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                            fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                            <path
                                d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                        </svg></div>
                </div>
                <input type="text" class="form-control" name="Subject" id="Subject" placeholder="Subject" required>
            </div>
            <div class="error-container1" id="subject-error"></div><br>

            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                            fill="currentColor" class="bi bi-duffle-fill" viewBox="0 0 16 16">
                            <path
                                d="M5.007 4.097q.011-.146.027-.298c.05-.464.141-.979.313-1.45.169-.465.432-.933.853-1.249 1.115-.836 2.485-.836 3.6 0 .42.316.684.784.853 1.25.171.47.263.985.313 1.449q.016.15.027.298c1.401.194 2.65.531 3.525 1.012 2.126 1.169 1.446 6.095 1.089 8.018a.954.954 0 0 1-.95.772H1.343a.954.954 0 0 1-.95-.772c-.357-1.923-1.037-6.85 1.09-8.018.873-.48 2.123-.818 3.524-1.012M4.05 5.633a22 22 0 0 0-1.565.352l-.091.026-.034.01a.5.5 0 0 0 .282.959l.005-.002.02-.005.08-.023a21 21 0 0 1 1.486-.334A21 21 0 0 1 8 6.25c1.439 0 2.781.183 3.767.367a21 21 0 0 1 1.567.356l.02.005.004.001a.5.5 0 0 0 .283-.959h-.003l-.006-.002-.025-.007a15 15 0 0 0-.43-.113 22 22 0 0 0-1.226-.265A22 22 0 0 0 8 5.25c-1.518 0-2.926.192-3.95.383M6.8 1.9c-.203.153-.377.42-.513.791a5.3 5.3 0 0 0-.265 1.292 35 35 0 0 1 1.374-.076c.866-.022 1.742.003 2.584.076a5.3 5.3 0 0 0-.266-1.292c-.135-.372-.309-.638-.513-.791-.76-.57-1.64-.57-2.4 0Z" />
                        </svg></div>
                </div>
                <input type="text" class="form-control" name="Lecturer" id="Lecturer" placeholder="Lecturer" required>
            </div>
            <div class="error-container3" id="lecturer-error"></div><br>

            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                            fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                            <path
                                d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                            <path
                                d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z" />
                        </svg></div>
                </div>
                <input type="number" class="form-control" name="Assignments" id="Assignments" placeholder="Assignments"
                    required>
            </div>
            <div class="error-container2" id="assignment-error"></div><br>

            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                            fill="currentColor" class="bi bi-calendar-range" viewBox="0 0 16 16">
                            <path d="M9 7a1 1 0 0 1 1-1h5v2h-5a1 1 0 0 1-1-1M1 9h4a1 1 0 0 1 0 2H1z" />
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                        </svg></div>
                </div>
                <input type="number" class="form-control" name="Semester" id="Semester" placeholder="Semester" required>
            </div>
            <div class="error-container4" id="semester-error"></div><br>

            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                            fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                            <path
                                d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                        </svg></div>
                </div>
                <input type="text" class="form-control" name="Image" id="Image" placeholder="Image" required>
            </div>
            <div class="error-container5" id="image-error"></div><br>

            <input type="submit" class="btn btn-primary" name="submitButton" value="Submit">
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
        .addField('#Subject', [{
            rule: 'required',
            errorMessage: 'Please enter a subject'
        },
        {
            rule: 'minLength',
            errorMessage: 'Minimum length is 3 characters',
            value: 2
        },
        {
            rule: 'maxLength',
            errorMessage: 'Maximum length is 20 characters',
            value: 50
        }
        ])
        .addField('#Lecturer', [{
            rule: 'required',
            errorMessage: 'Please enter a lecturer'
        },
        {
            rule: 'minLength',
            errorMessage: 'Minimum length is 3 characters',
            value: 2
        },
        {
            rule: 'maxLength',
            errorMessage: 'Maximum length is 20 characters',
            value: 50
        }
        ])
        .addField('#Assignments', [{
            rule: 'required',
            errorMessage: 'Please enter the number of assignments'
        },
        {
            rule: 'minLength',
            errorMessage: 'Minimum length is 1 characters',
            value: 1
        },
        {
            rule: 'maxLength',
            errorMessage: 'Maximum length is 20 characters',
            value: 50
        }
        ])
        .addField('#Semester', [{
            rule: 'required',
            errorMessage: 'Please enter the semester'
        },
        {
            rule: 'minLength',
            errorMessage: 'Minimum length is 1 characters',
            value: 1
        },
        {
            rule: 'maxLength',
            errorMessage: 'Maximum length is 20 characters',
            value: 50
        }
        ])
        .addField('#Image', [{
            rule: 'required',
            errorMessage: 'Please enter an image'
        }])

        .onSuccess((event) => {
            document.getElementById('details').submit();
        });
</script>

</html>