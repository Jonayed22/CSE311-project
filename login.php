<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(images/logi.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
        label{
            color: white
        }
    </style>
</head>

<body>
    <br>
    <br>
    <br><br><br><br><br><br><br><br><br><br>
    <center>
        <form action="login_prosses.php" method="post">
            <label>Username:</label>
            <input type="text" name="username"><br><br>
            <label>Password:</label>
            <input type="password" name="password"><br><br>
            <input type="submit" name="submit" value="Login">
        </form>
        <br>
        <a href="Spro.php">
            <button>Home</button>
        </a>
    </center>

</body>

</html>