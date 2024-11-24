<?php
include("connection.php");
$sql = "select * from admission";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
    <center>
        <div>
            <h1>Applyed Student</h1>
            <table border="1px">
                <tr>
                    <th style="padding: 20px; font-size:15px">Id</th>
                    <th style="padding: 20px; font-size:15px">Name</th>
                    <th style="padding: 20px; font-size:15px">Father name</th>
                    <th style="padding: 20px; font-size:15px">Mother name</th>
                    <th style="padding: 20px; font-size:15px">Email</th>
                    <th style="padding: 20px; font-size:15px">Phone num</th>
                    <th style="padding: 20px; font-size:15px">Class</th>
                    <th style="padding: 20px; font-size:15px">Address</th>
                    <th style="padding: 20px; font-size:15px">Delete</th>
                </tr>
                <?php
                while ($data = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['id']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['name']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['father_name']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['mother_name']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['email']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['phone_num']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['class']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['address']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "<a onClick=\"javascript: return confirm('Are you sure'); \" class='btn btn-danger' href='delete.php?id={$data['id']}'>Delete</a>" ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <br>
        <a href="login_prosses.php">
            <button>Back</button>
        </a>
        <br>
        <br>
        <a href="Spro.php">
            <button>Home</button>
        </a>
    </center>
</body>

</html>