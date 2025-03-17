<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card-img-top {
            height: 250px;
            object-fit: cover;
        }
        .btn-center {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <?php require('common/header.php'); ?>

    <div class="container mt-4">
        <p class="text-center">
            On this site, you can find a number of study materials for the Virtual University of Pakistan, including professional notes for all subjects.
            Download past papers, handouts, GDBs, and assignments. These resources are essential for students preparing for their final exams.
        </p>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="images/handouts.png" class="card-img-top" alt="Handouts">
                    <div class="card-body text-center">
                        <a href="handout.php" class="btn btn-outline-dark">Handouts</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/files.png" class="card-img-top" alt="Files">
                    <div class="card-body text-center">
                        <a href="files.php" class="btn btn-outline-dark">Files</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/Past papers.png" class="card-img-top" alt="Past Papers">
                    <div class="card-body text-center">
                        <a href="past_paper.php" class="btn btn-outline-dark">Past Papers</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/sf.png" class="card-img-top" alt="Software">
                    <div class="card-body text-center">
                        <a href="software.php" class="btn btn-outline-dark">Software</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-light pt-4 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Welcome to our website where you can download useful PDF documents easily. Stay connected for more updates!</p>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: muhammadwasif207@gmail.com</p>
                    <p>Address: Islamabad, Pakistan</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <a href="https://www.facebook.com/share/15AZcbbA5r/" class="text-light me-2">Facebook</a><br>
                    <a href="https://www.instagram.com/m_wasif1313?igsh=MzNjZ2MwcHFrMGRl" class="text-light">Instagram</a>
                </div>
            </div>
            <hr class="bg-light">
            <div class="text-center pb-3">
                <p class="mb-0">&copy; 2025 vustudy. All Rights Reserved.</p>
                <p class="mb-0">Designed by <a href="#" class="text-warning text-decoration-none">Wasif</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
