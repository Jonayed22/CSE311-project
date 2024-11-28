<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="skyblue">
    <center>
    <form action="t_register.php" method="post">
            <lebel>User name: </lebel><br>
            <input type="text" name="username"><br>
            <lebel>Password: </lebel><br>
            <input type="password" name= "password"><br>
            <input type="submit" name="submit" value="Submit">
    </form>
    <a href="Spro.php">
        <button>Logout</button>
    </a>
    </center>
</body>
</html>
<?php
include ("connection.php");
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO admin (username, password) values ('$username', '$password')";
    if(mysqli_query($conn, $sql))
    {
        echo "Registation Succesfull";
    }
    mysqli_close($conn);
}


?>
