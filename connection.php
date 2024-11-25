<?php
$servername="localhost";
$username="root";
$password="";
$database="school";
$conn = "";
try
{
    $conn=mysqli_connect($servername,$username,$password,$database);
}
catch (mysqli_sql_exception)
{
    echo "Could not connect";
}
?>