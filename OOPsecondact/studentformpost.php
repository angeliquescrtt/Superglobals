<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap" rel="stylesheet">
    <title>Collected Information</title>
<body>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
         h2 {
            font-size: 30px;
            color: #3399FF;
            text-align: center;
        }
        .collected-info {
            width: 50%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 30px auto;
        }

        .collected-info p {
            margin-bottom: 10px;
        }
    </style>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $age = $_POST['age'];
        $birthday = $_POST['birthday'];
        $course_year = $_POST['course_year'];
        $enrolled = $_POST['enrolled'];
        $subject = $_POST['subject'];
        $grade = $_POST['grade'];


        echo "<div class='collected-info'>";
            echo "<h2>Student Information:</h2>";
            echo "<p> First Name: $first_name</p>";
            echo "<p> Middle Name: $middle_name</p>";
            echo "<p> Last Name: $last_name</p>";
            echo "<p> Age: $age</p>";
            echo "<p> Date of Birth: $birthday</p>";
            echo "<p> Course and Year: $course_year</p>";
            echo "<p> Enrolled: $enrolled</p>";
            echo "<p> Subject: $subject</p>";
            echo "<p> Grade: $grade</p>";
        echo "</div>";
        }
    ?>
</body>
</html>