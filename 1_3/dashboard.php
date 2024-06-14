<?php
require_once 'libs/main.php';

printHeader();
?>

<main class="container">
    <h1 class="mb-5">Dashboard</h1>

    <h2>Courses</h2>

    <select class="form-control form-control-lg mb-5">
        <option value="">Web Programming</option>
        <option value="">Java Programming</option>
    </select>

    <h2>Course Materials</h2>

    <div class="row">
        <div class="card me-5" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Course Material Title</h5>
                <p class="card-text">Course material description.</p>
                <a href="#" class="btn btn-primary">Download</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Course Material Title 2</h5>
                <p class="card-text">Course material description.</p>
                <a href="#" class="btn btn-primary">Download</a>
            </div>
        </div>
    </div>
</main>

<?php
printFooter();
?>