<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(images/qr.jpg);
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
    <br>
    <br>
    <center>
        <form action="admission.php" method="post">
            <lebel>Id: </lebel><br>
            <input type="number" name="id"><br>
            <lebel>Name: </lebel><br>
            <input type="text" name="name"><br>
            <lebel>Father_name: </lebel><br>
            <input type="text" name="father_name"><br>
            <lebel>Mother_name: </lebel><br>
            <input type="text" name="mother_name"><br>
            <lebel>Email: </lebel><br>
            <input type="text" name="email"><br>
            <lebel>Phone_num: </lebel><br>
            <input type="number" name="phone_num"><br>
            <lebel>Class: </lebel><br>
            <input type="number" name="class"><br>
            <lebel>Address: </lebel><br>
            <input type="text" name="address"><br>
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
    $id = $_POST['id'];
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $email = $_POST['email'];
    $phone_num = $_POST['phone_num'];
    $class = $_POST['class'];
    $address = $_POST['address'];
    $sql = "INSERT INTO admission (id,name, father_name,mother_name,email,phone_num,class,address) values ('$id','$name', '$father_name', '$mother_name','$email','$phone_num','$class','$address')";
    if (mysqli_query($conn, $sql)) {
        echo "Data Inserted";
    }
    mysqli_close($conn);
}


?>