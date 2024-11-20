<?php
include("connection.php");
$ak = $_GET;
if ($conn === false) {
    die("connection error");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];

    $pass = $_POST['password'];


    $sql = "select * from admin where username='" . $name . "' AND password='" . $pass . "'  ";

    $result = mysqli_query($conn, $sql);
    if (mysqli_fetch_assoc($result)) {
        $_SESSION['user'] = $_POST['username'];
        $ak;
    } else {
        header("location:login.php?Invalid=please give the correct information");
    }
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
    body{
        background-color: beige;
    }
</style>
</head>

<body action="login_prosses.php" method="get">
    <center>
        <br><br><br><br><br><br>
    <div>
        <lebel><a class="btn btn-success" href="insert.php">Go To Insert Page</a></lebel><br><br>
        <lebel><a class="btn btn-success" href="admission_data.php">Go To Admission Page</a></lebel><br><br>
        <lebel><a class="btn btn-success" href="dep_data.php">Department data</a></lebel><br><br>
        <lebel><a class="btn btn-success" href="student_data.php">Student data</a></lebel><br>
</div>
    <br>
    <a href="Spro.php">
        <button>Home</button>
    </a>
    </center>
</body>

</html>