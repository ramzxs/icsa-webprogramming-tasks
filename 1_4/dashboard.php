<?php
require_once 'libs/main.php';

printHeader('Y');
?>

<main class="container">
    <h1 class="mb-5">Dashboard</h1>

    <h2>My Courses</h2>

    <select class="form-control form-control-lg mb-5">
        <option value="">Web Programming</option>
        <option value="">Java Programming</option>
    </select>

    <h2>Course Materials</h2>

    <div class="row">
        <div class="col card me-5 mb-5">
            <div class="card-body">
                <h5 class="card-title">Course Material Title</h5>
                <p class="card-text">Course material description.</p>
                <a href="#" class="btn btn-primary">Download PDF</a>

                <a href="#" class="btn btn-secondary">Download DOC</a>
            </div>
        </div>

        <div class="col card me-5 mb-5">
            <div class="card-body">
                <h5 class="card-title">Course Material Title</h5>
                <p class="card-text">Course material description.</p>
                <a href="#" class="btn btn-primary">Download PDF</a>

                <a href="#" class="btn btn-secondary">Download DOC</a>
            </div>
        </div>

        <div class="col card me-5 mb-5">
            <div class="card-body">
                <h5 class="card-title">Course Material Title</h5>
                <p class="card-text">Course material description.</p>
                <a href="#" class="btn btn-primary">Download PDF</a>

                <a href="#" class="btn btn-secondary">Download DOC</a>
            </div>
        </div>
    </div>
</main>

<?php
printFooter();
?>