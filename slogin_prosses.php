<?php
include("connection.php");
$ak=$_GET;
if($conn===false)
{
	die("connection error");
}

		
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name = $_POST['username'];

		$pass = $_POST['password'];


		$sql="select * from s_user where username='".$name."' AND password='".$pass."'  ";

		$result=mysqli_query($conn,$sql);
        if(mysqli_fetch_assoc($result)){
            $_SESSION['user']=$_POST['username'];
            $ak;
        }
        else{
            header("location:sloogin.php?Invalid=please give the correct information");
        }
    }
    else{
        echo 'not working';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body action="slogin_prosses.php" method="get">
    <ul>
    <li><a href="stpage.php">View Your Result</a></li>
    </ul>
</body>
</html>