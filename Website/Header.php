<!DOCTYPE html>
<html lang="en">

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-flex float-end">
                <span class="navbar-text text-white">Welcome <?php echo $_SESSION['Username']; ?> - |</span>
                <form action="logout.php">
                    <button class="btn btn-success" type="submit">Log out</button>
                </form>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="InsertSubject.php">Insert Subject</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="InsertTask.php">Insert Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Subject.php">Subjects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Tasks.php">Tasks</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>