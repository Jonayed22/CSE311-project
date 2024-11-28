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

<body bgcolor="skyblue">
    <center>
        <form action="student.php" method="post">
            <lebel>Student_id: </lebel><br>
            <input type="number" name="Student_id"><br>
            <lebel>name: </lebel><br>
            <input type="text" name="name"><br>
            <lebel>department_id: </lebel><br>
            <input type="text" name="department_id"><br>
            <lebel>total_cridit: </lebel><br>
            <input type="number" name="total_cridit"><br>
            <lebel>contact_num: </lebel><br>
            <input type="number" name="contact_num"><br>
            <lebel>sex: </lebel><br>
            <input type="text" name="sex"><br>
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
include("connection.php");
if (isset($_POST['submit'])) {
    $Student_id = $_POST['Student_id'];
    $name = $_POST['name'];
    $department_id = $_POST['department_id'];
    $total_cridit = $_POST['total_cridit'];
    $contact_num = $_POST['contact_num'];
    $sex = $_POST['sex'];

    $sql = "INSERT INTO student (Student_id, name,department_id,total_cridit,contact_num,sex) values ('$Student_id', '$name', '$department_id','$total_cridit' ,'$contact_num','$sex')";
    if (mysqli_query($conn, $sql)) {
        echo "Data Inserted";
    }
    mysqli_close($conn);
}


?>