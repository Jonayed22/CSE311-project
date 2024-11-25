<?php
include("connection.php");
$sql = "SELECT * from department";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <div>
            <h1>Department Information</h1>
            <table border="1px">
                <tr>
                    <th style="padding: 20px; font-size:15px">Department_name</th>
                    <th style="padding: 20px; font-size:15px">Department_id</th>
                    <th style="padding: 20px; font-size:15px">building</th>
                    <th style="padding: 20px; font-size:15px">Department_H</th>
                    <th style="padding: 20px; font-size:15px">Delete</th>
                </tr>
                <?php
                while ($data = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['Department_name']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['Department_id']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['buldign']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['Department_H']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "<a href='delet_dep.php?Department_id={$data['Department_id']}'>Delete</a>" ?></td>
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