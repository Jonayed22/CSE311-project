<?php
 session_start();
 if(isset($_SESSION['user'])){
 	 echo 'welcome ' .$_SESSION['user'].'<br/>';
 	 echo '<a href="logout.php?logout">Logout</a>';

 }
 else
    {
        header("location:login.php");
    }
?>