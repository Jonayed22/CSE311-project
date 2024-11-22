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
    <form action="takes.php" method="post">
            <lebel>student_id: </lebel><br>
            <input type="number" name="student_id"><br>
            <lebel>course_id: </lebel><br>
            <input type="text" name= "course_id"><br>
            <lebel>credit: </lebel><br>
            <input type="number" name="credit"><br>
            <lebel>semester: </lebel><br>
            <input type="text" name="semester"><br>
            <lebel>section: </lebel><br>
            <input type="number" name="section"><br>

            <input type="submit" name="submit" value="Submit">
    </form>
    <br>
    <a href="insert.php">
        <button>Back</button>
    </a>
    <br>
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
    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];
    $credit = $_POST['credit'];
    $semester = $_POST['semester'];
    $section = $_POST['section'];

    $sql = "INSERT INTO Takes (student_id, course_id,credit,semester,section) values ('$student_id', '$course_id', '$credit','$semester','$section')";
    if(mysqli_query($conn, $sql))
    {
        echo "Data Inserted";
    }
    mysqli_close($conn);
}


?>