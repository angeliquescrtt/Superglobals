<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap" rel="stylesheet">
    <title>Student Form in POST</title>
    <style>
         body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            color: #202020;
            margin: 0;
            padding: 0;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type=text], select {
            width: 100%;
            padding: 10px 15px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=number], select {
            width: 100%;
            padding: 10px 15px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=date], select {
            width: 100%;
            padding: 10px 15px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=radio], select {
            padding: 10px 15px;
            display: inline;
            margin: 8px;
        }

        button[type=submit] {
            width: 100%;
            background-color: #3399FF;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 20px;
        }

        button[type=submit]:hover {
            background-color: #0080FF;
        }

        form {
            background-color: #f2f2f2;
            max-width: 650px;
            margin: auto;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            padding: 20px;
            margin-bottom: 20px;
        
        }
    </style>
</head>
<body>

    <h2>Student Information Form</h2>

    <form action="studentformpost.php" method="post" onsubmit="return validateForm()">
        <label for="first_name">1. First Name:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="middle_name">2. Middle Name:</label>
        <input type="text" id="middle_name" name="middle_name">

        <label for="last_name">3. Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="birthday">4. Date of Birth:</label>
        <input type="date" id="birthday" name="birthday" required>

        <label for="age">4. Age:</label>
        <input type="text" id="age" name="age" required>

        <label for="course_year">5. Course and Year:</label>
        <input type="text" id="course_year" name="course_year" required>

        <label>6. Enrolled:</label>
        <input type="radio" name="enrolled" value="Yes" required> Yes   
        <input type="radio" name="enrolled" value="No" required> No 

        <label for="subject">7. Subject:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="grade">8. Grade:</label>
        <input type="number" step="0.1" id="grade" name="grade" required>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
