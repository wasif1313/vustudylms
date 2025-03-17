<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 1200px;
        }
        .semester-container {
            border-radius: 10px;
            background: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }
        .semester-container:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .semester-container h3 {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
        .btn-custom {
            width: 100%;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <?php require('common/header.php'); ?>
    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php
            $semesters = [
                "1st Semester" => ["CS101", "ENG101", "ISL202", "MTH100", "MTH101", "PAK301", "PHY101", "PHY301"],
                "2nd Semester" => ["CS201", "ENG201", "MTH104", "MTH202", "STA301", "MGT211"],
                "3rd Semester" => ["CS301", "CS304", "CS601", "MCM301", "MTH501"],
                "4th Semester" => ["CS403", "CS504", "CS604", "CS610"],
                "5th Semester" => ["CS205", "CS409", "CS409P", "CS432", "CS502", "CS625"],
                "6th Semester" => ["CS408", "CS311", "CS312", "MGT501", "CS420", "CS510", "CS615"],
                "7th Semester" => ["CS505", "CS505P", "CS636", "IT601", "IT601P"],
                "8th Semester" => ["CS407", "CS310", "CS614", "CS405", "CS406", "CS627", "IT602"]
            ];
            foreach ($semesters as $semester => $subjects) {
                echo "<div class='col'>";
                echo "<div class='semester-container'>";
                echo "<h3>$semester</h3>";
                foreach ($subjects as $subject) {
                    echo "<a href='common/" . strtolower($subject) . ".pdf'><button type='button' class='btn btn-outline-primary btn-custom'>$subject</button></a>";
                }
                echo "</div></div>";
            }
            ?>
        </div>
    </div>
    <?php require('common/footer.php'); ?>
</body>
</html>