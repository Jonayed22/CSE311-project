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
    <form action="instructor.php" method="post">
            <lebel>Teacher_id: </lebel><br>
            <input type="number" name="Teacher_id"><br>
            <lebel>Teacher_name: </lebel><br>
            <input type="text" name= "Teacher_name"><br>
            <lebel>department_id: </lebel><br>
            <input type="text" name="department_id"><br>
            <lebel>salary: </lebel><br>
            <input type="number" name="salary"><br>
            <lebel>email: </lebel><br>
            <input type="text" name="email"><br>
            <lebel>sex: </lebel><br>
            <input type="text" name="sex"><br>
            <lebel>Phone_num: </lebel><br>
            <input type="number" name="Phone_num"><br>
            <lebel>Bank_acc: </lebel><br>
            <input type="number" name="Bank_acc"><br>
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
    $Teacher_id = $_POST['Teacher_id'];
    $Teacher_name = $_POST['Teacher_name'];
    $department_id = $_POST['department_id'];
    $salary = $_POST['salary'];
    $email = $_POST['email'];
    $sex = $_POST['sex'];
    $Phone_num = $_POST['Phone_num'];
    $Bank_acc = $_POST['Bank_acc'];
    $sql = "INSERT INTO Instructor (Teacher_id, Teacher_name,department_id,salary,email,sex,Phone_num,Bank_acc) values ('$Teacher_id', '$Teacher_name', '$department_id','$salary','$email','$sex','$Phone_num','$Bank_acc')";
    if(mysqli_query($conn, $sql))
    {
        echo "Data Inserted";
    }
    mysqli_close($conn);
}


?>