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
        <form action="section.php" method="post">
            <lebel>Course_id: </lebel><br>
            <input type="text" name="Course_id"><br>
            <lebel>Section: </lebel><br>
            <input type="text" name="Section"><br>
            <lebel>semester: </lebel><br>
            <input type="text" name="semester"><br>
            <lebel>Building: </lebel><br>
            <input type="text" name="Building"><br>
            <lebel>Timing: </lebel><br>
            <input type="number" name="Timing"><br>

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
    $Course_id = $_POST['Course_id'];
    $Section = $_POST['Section'];
    $semester = $_POST['semester'];
    $Building = $_POST['Building'];
    $Timing = $_POST['Timing'];

    $sql = "INSERT INTO Section (Course_id, Section,semester,Building,Timingc) values ('$Course_id', '$Section', '$semester','$Building','$Timing')";
    if (mysqli_query($conn, $sql)) {
        echo "Data Inserted";
    }
    mysqli_close($conn);
}


?>