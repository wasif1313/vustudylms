<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title><?php
require('common/header.php');
?>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .my-card {
            height: auto;
        }
        .card img {
            width: 100%;
            height: auto;
        }
        .btn-center {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="images/it.png" class="card-img-top" alt="Information Technology">
                    <div class="card-body text-center">
                        <a href="it.php" class="btn btn-outline-dark">Information Technology</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/se.png" class="card-img-top" alt="Software Engineering">
                    <div class="card-body text-center">
                        <a href="files.php" class="btn btn-outline-dark">Software Engineering</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/cs.png" class="card-img-top" alt="Computer Science">
                    <div class="card-body text-center">
                        <a href="cs.php" class="btn btn-outline-dark">Computer Science</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/ds.png" class="card-img-top" alt="Data Science">
                    <div class="card-body text-center">
                        <a href="ds.php" class="btn btn-outline-dark">Data Science</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require('common/footer.php');
?>
</body>
</html>
