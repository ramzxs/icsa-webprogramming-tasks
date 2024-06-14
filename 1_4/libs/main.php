<?php
/**
 * MAIN PHP LIBRARY
 */


 function printHeader($userIsIn = 'N') {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University eLearning Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href=".">Q8University</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= ($userIsIn == 'Y') ? 'dashboard.php' : '.' ?>">
                                <?= ($userIsIn == 'Y') ? 'Dashboard' : 'Home' ?>
                            </a>
                        </li> <?php
                        if ($userIsIn == 'N') { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <?php
                        } ?>
                    </ul>
                    <a class="btn btn-outline-success" href="<?= ($userIsIn == 'Y') ? 'logout.php' : 'login.php' ?>"><?= ($userIsIn == 'Y') ? 'Logout' : 'Login' ?></a>
                </div>
            </div>
        </nav>
    </header>

    <?php
 }


 function printFooter() {
    ?>

<footer>
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a href="." class="nav-link px-2 text-body-secondary">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link px-2 text-body-secondary">About</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link px-2 text-body-secondary">Login</a></li>
                </ul>
                <p class="text-center text-body-secondary border-top mt-3 pt-3">© 2024 Q8University</p>
            </footer>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

    <?php
 }