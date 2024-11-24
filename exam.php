<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
            background-image: url(images/sc.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
        lebel{
            color: white
        }
        </style>
</head>
<body>
    <center>
    <form action="exam.php" method="post">
            <lebel>cgpa: </lebel><br>
            <input type="number" name="cgpa"><br>
            <lebel>Course_id: </lebel><br>
            <input type="text" name= "course_id"><br>
            <lebel>Student_id: </lebel><br>
            <input type="number" name="student_id"><br>
            <lebel>grade: </lebel><br>
            <input type="text" name="grade"><br>
            <lebel>Section: </lebel><br>
            <input type="number" name="section"><br>
            <input type="submit" name="submit" value="Submit">
    </form>
    <br>
    <a href="Spro.php">
        <button>Home</button>
    </a>
    </center>
</body>
</html>
<?php
include ("connection.php");
if(isset($_POST['submit']))
{
    $cgpa = $_POST['cgpa'];
    $course_id = $_POST['course_id'];
    $student_id = $_POST['student_id'];
    $grade = $_POST['grade'];
    $section = $_POST['section'];
    $sql = "INSERT INTO exam (cgpa, course_id,student_id,grade,section) values ('$cgpa', '$course_id', '$student_id','$grade','$section')";
    if(mysqli_query($conn, $sql))
    {
        echo "Data Inserted";
    }
    mysqli_close($conn);
}


?>
