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
    <form action="department.php" method="post">
            <lebel>Department_name: </lebel><br>
            <input type="text" name="Department_name"><br>
            <lebel>Department_id: </lebel><br>
            <input type="text" name= "Department_id"><br>
            <lebel>Building: </lebel><br>
            <input type="text" name="buldign"><br>
            <lebel>Department_H: </lebel><br>
            <input type="text" name="Department_H"><br>
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
    $Department_name = $_POST['Department_name'];
    $Department_id = $_POST['Department_id'];
    $buldign = $_POST['buldign'];
    $Department_H = $_POST['Department_H'];
    $sql = "INSERT INTO Department (Department_name, Department_id,buldign,Department_H) values ('$Department_name', '$Department_id', '$buldign','$Department_H')";
    if(mysqli_query($conn, $sql))
    {
        echo "Data Inserted";
    }
    mysqli_close($conn);
}


?>
