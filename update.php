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
        lebel {
            display: inline-block;
            width: 100px;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .div_sty {
            background-color: skyblue;
            width: 400px;
            padding-bottom: 70px;
            padding-top: 70px;
        }
    </style>
</head>

<body>
    <center>
        <div class="div_sty">

            <form action="#" method="post">
                <div>
                    <lebel>Name:</lebel>
                    <input type="text" name="name"><br>
                </div>
                <div>
                    <lebel>Department_id:</lebel>
                    <input type="text" name="department_id"><br>
                </div>
                <div>
                    <lebel>Total_cridit:</lebel>
                    <input type="number" name="total_cridit"><br>
                </div>
                <div>
                    <lebel>Contact_num:</lebel>
                    <input type="number" name="contact_num"><br>
                </div>
                <div>
                    <lebel>Sex:</lebel>
                    <input type="text" name="sex"><br>
                </div>
                <div>
                    <input class="btn btn-success" type="submit" name="update" value="Update">
                </div>
            </form>

        </div>
    </center>
</body>

</html>
<?php
include("connection.php");
$Student_id = $_GET['Student_id'];
$sql = "SELECT * from student where $Student_id='Student_id' ";
$result = mysqli_query($conn, $sql);
$temp = $result->fetch_assoc();

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $department_id = $_POST['department_id'];
    $total_cridit = $_POST['total_cridit'];
    $contact_num = $_POST['contact_num'];
    $sex = $_POST['sex'];
    $query="UPDATE student set name='$name',department_id='$department_id',total_cridit='$total_cridit', contact_num='$contact_num',sex='$sex' WHERE Student_id='$Student_id' ";
    $result1= mysqli_query($conn, $query);
    if($result1)
    {
        header("location:student_data.php");
    }
}

?>