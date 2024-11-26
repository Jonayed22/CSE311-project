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
    <form action="parents.php" method="post">
            <lebel>Student_id: </lebel><br>
            <input type="number" name="Student_id"><br>
            <lebel>Father_name: </lebel><br>
            <input type="text" name= "Father_name"><br>
            <lebel>Mother_name: </lebel><br>
            <input type="text" name="Mother_name"><br>
            <lebel>phone_num: </lebel><br>
            <input type="number" name="phone_num"><br>
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
    $Student_id = $_POST['Student_id'];
    $Father_name = $_POST['Father_name'];
    $Mother_name = $_POST['Mother_name'];
    $phone_num = $_POST['phone_num'];
    $sql = "INSERT INTO Parents (Student_id, Father_name,Mother_name,phone_num) values ('$Student_id', '$Father_name', '$Mother_name','$phone_num')";
    if(mysqli_query($conn, $sql))
    {
        echo "Data Inserted";
    }
    mysqli_close($conn);
}


?>