            <?php
include("connection.php");
$sql = "SELECT * from exam";
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
            <h1>Student Exam information</h1>
            <table border="1px">
                <tr>
                    <th style="padding: 20px; font-size:15px">CGPA</th>
                    <th style="padding: 20px; font-size:15px">course_id</th>
                    <th style="padding: 20px; font-size:15px">student_id</th>
                    <th style="padding: 20px; font-size:15px">grade</th>
                    <th style="padding: 20px; font-size:15px">Section</th>
                </tr>
                <?php
                while ($data = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['cgpa']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['course_id']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['student_id']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['grade']}" ?></td>
                        <td style="padding: 20px; font-size:15px"><?php echo "{$data['Section']}" ?></td>
                        </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <br>
        <a href="Spro.php">
            <button>Home</button>
        </a>
    </center>
</body>

</html>