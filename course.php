<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url(images/sc.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }

        lebel {
            color: white
        }
    </style>
</head>

<body>
    <center>
        <form action="course.php" method="post">
            <lebel>Course_name: </lebel><br>
            <input type="text" name="course_name"><br>
            <lebel>Course_id: </lebel><br>
            <input type="text" name="course_id"><br>
            <lebel>Department_name: </lebel><br>
            <input type="text" name="department_name"><br>
            <lebel>credit: </lebel><br>
            <input type="number" name="credit"><br>

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
include("connection.php");
if (isset($_POST['submit'])) {
    $course_name = $_POST['course_name'];
    $course_id = $_POST['course_id'];
    $department_name = $_POST['department_name'];
    $credit = $_POST['credit'];
    $sql = "INSERT INTO course (course_name, course_id,department_name,credit) values ('$course_name', '$course_id', '$department_name','$credit')";
    if (mysqli_query($conn, $sql)) {
        echo "Data Inserted";
    }
    mysqli_close($conn);
}


?>