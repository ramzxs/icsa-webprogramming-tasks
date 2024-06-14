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
                <a class="navbar-brand" href="#">Q8University</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href=".">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                    </ul>
                    <a class="btn btn-outline-success" href="login.php">Login</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        <h1>Welcome to Q8 University eLearning Platform!</h1>

        <img src="assets/campus.jpg" class="w-100 mb-5" alt="Campus">

        <h2>COURSES</h2>

        <div class="row">
            <div class="card me-5" style="width: 18rem;">            
                <div class="card-body">
                    <h5 class="card-title">Course Title</h5>
                    <p class="card-text">Course description.</p>
                    <a href="#" class="btn btn-primary">Open Lessons</a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="." class="nav-link px-2 text-body-secondary">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link px-2 text-body-secondary">About</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link px-2 text-body-secondary">Login</a></li>
                </ul>
                <p class="text-center text-body-secondary">© 2024 Q8University</p>
            </footer>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>