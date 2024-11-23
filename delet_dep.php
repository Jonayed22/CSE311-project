<?php
    include("connection.php");

    if($_GET['Department_id'])
    {
        $temp=$_GET['id'];
        $sql="DELETE from department where Department_id='$temp' ";
        $result=mysqli_query($conn,$sql);
    }
    if($result)
    {
        header("location:department_data.php");
    }
?>