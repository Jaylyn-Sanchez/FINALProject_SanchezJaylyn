<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" type="text/css" href="RegisForm.css">
</head>
<body>

<h2>Student Registration Form</h2>

<form method="POST" action="Output_RegisForm.php">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    Age:
    <input type="number" name="age" min="1" max="100" required>
    <br><br>

    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Course:
    <select name="course" required>
        <option value="">Select Course</option>
        <option value="BSIT">BSIT</option>
        <option value="BSBA">BSBA</option>
        <option value="BSED">BSED</option>
    </select>
    <br><br>

    Hobbies:
    <input type="checkbox" name="hobbies[]" value="Reading"> Reading
    <input type="checkbox" name="hobbies[]" value="Sports"> Sports
    <input type="checkbox" name="hobbies[]" value="Music"> Music
    <br><br>

    <button type="submit">Submit</button>
    <input type="reset" value="Reset">

</form>

</body>
</html>