<?php
include("connection.php");
$sql = "SELECT * from student";
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
<style>
    body{
        background-color: beige;
    }
</style>
</head>

<body>
    <center>
        <div>
            <h1>Student information</h1>
            <table border="1px">
                <tr>
                    <th style="padding: 20px; font-size:15px">Student_id</th>
                    <th style="padding: 20px; font-size:15px">Name</th>
                    <th style="padding: 20px; font-size:15px">Department_id</th>
                    <th style="padding: 20px; font-size:15px">Total_cridit</th>
                    <th style="padding: 20px; font-size:15px">Contact_num</th>
                    <th style="padding: 20px; font-size:15px">Sex</th>
                    <th style="padding: 20px; font-size:15px">Delete</th>
                    <th style="padding: 20px; font-size:15px">Update</th>
                </tr>
                <?php
                while ($data = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['Student_id']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['name']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['department_id']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['total_cridit']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['contact_num']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['sex']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "<a onClick=\"javascript: return confirm('Are you sure'); \" class='btn btn-danger' href='delete_student.php?Student_id={$data['Student_id']}'>Delete</a>" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "<a class='btn btn-primary' href='update.php?Student_id={$data['Student_id']}'>Update</a>" ?></td>
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
        <br><br>
        <a href="Spro.php">
            <button>Home</button>
        </a>
    </center>
</body>

</html>