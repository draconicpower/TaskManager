<?php
session_start();
include "dbfuncs.php";
$conn = connectToDB();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <title>Document</title>
</head>

<body class="bg-dark text-white">
    <h1 class="text-center mb-5 mt-5">Welcome To The Registration Page!</h1>
    <div class="bg-dark bg-gradient w-25 d-flex text-white text-center"
        style="height: 600px; justify-content: center; margin: 0 auto;">
        <form method="POST" enctype="multipart/form-data" action="RegLogic.php" id="details">
            <h3 class="mt-2">Register</h3><br><br>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                            fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg></div>
                </div>
                <input type="text" class="form-control" name="PhoneNumber" id="PhoneNumber" placeholder="PhoneNumber"
                    required>
            </div> <br><br>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                            fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                            <path
                                d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5" />
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        </svg></div>
                </div>
                <input type="text" class="form-control" name="Username" id="Username" placeholder="Username" required>
            </div> <br><br>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                            fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        </svg></div>
                </div>
                <input type="password" class="form-control" name="Password" id="Password" placeholder="Password" required>
            </div><br><br>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="25"
                            fill="currentColor" class="bi bi-file-earmark-image" viewBox="0 0 16 16">
                            <path d="M6.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            <path
                                d="M14 14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zM4 1a1 1 0 0 0-1 1v10l2.224-2.224a.5.5 0 0 1 .61-.075L8 11l2.157-3.02a.5.5 0 0 1 .76-.063L13 10V4.5h-2A1.5 1.5 0 0 1 9.5 3V1z" />
                        </svg></div>
                </div>
                <input type="file" class="form-control" name="image" id="image" placeholder="image" required>
            </div><br><br>

            <button class="btn btn-primary rounded-5" type="submit" name="submnitbutton" style="width: 100%;">Submit</button>
        </form>
    </div>
    <p class="text-center">Already Have An Account? <a href="index.php">Login Here!</a></p>
    <script>
    const validator = new JustValidate('#details');

    validator
        .addField('#PhoneNumber', [{
                rule: 'required',
                errorMessage: 'Please enter a PhoneNumber'
            },
            {
                rule: 'minLength',
                errorMessage: 'Minimum length is 8 PhoneNumber',
                value: 8
            },
            {
                rule: 'maxLength',
                errorMessage: 'Maximum length is PhoneNumber',
                value: 10
            },
            {
                rule: 'number',
                errorMessage: 'Please enter a valid PhoneNumber'
            }
        ])
        .addField('#Username', [{
                rule: 'required',
                errorMessage: 'Please enter a Username'
            },
            {
                rule: 'minLength',
                errorMessage: 'Minimum length is 3 characters',
                value: 3
            },
            {
                rule: 'maxLength',
                errorMessage: 'Maximum length is 30 characters',
                value: 30
            }
        ])
        .addField('#Password', [{
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
                value: 20
            }
        ])
        .onSuccess((event) => {
            document.getElementById('details').submit();
        });
</script>
</body>

</html>