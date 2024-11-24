<?php
include ("connection.php");

$username = "refat";
$password = "1234";

$sql = "INSERT INTO admin (username, password) values ('$username', '$password')";
try {
    Mysqli_query($conn,$sql);
    echo "Registation done";
}
catch (mysqli_sql_exception)
{
    echo "Could not register";
}

?>