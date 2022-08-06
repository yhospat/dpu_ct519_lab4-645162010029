<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register ระบบนักศึกษา</title>

    <link rel="stylesheet" href="">
</head>
<body>
<div class="header">
            <h2>แสดงข้อมูล</h2>
        </div>

<?php include 'server.php'; ?>

<?php

//print_r($_POST);
$educationname = $_POST['educationname'];
$studentID = $_POST['studentID'];
$fistname = $_POST['fistname'];
$listname = $_POST['listname'];
$tellnumber = $_POST['tellnumber'];
$email = $_POST['email'];

mysqli_query($conn, "INSERT INTO users (educationname, studentID, fistname, listname, tellnumber, email)
                    VALUES ('$educationname', '$studentID', '$fistname', '$listname', '$tellnumber', '$email')");

if (mysqli_affected_rows($conn) > 0 ){
   // echo '<p>Member Added</p>';
   // echo '<a href="page_view.php">Back to View Data</a>';
}
//mysqli_query($conn, "SELECT * FROM users (educationname, studentID, fistname, listname, tellnumber, email)");
?>
<?php mysqli_close($conn); ?>

<?php 
include 'server.php';
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query) or die ("Error in sql : $query" . mysqli_error($query));

if (mysqli_affected_rows($conn) > 0 ){
    //echo '<p>Member Added</p>';
    echo '<a href="register.php">Back to Register</a>';
}                
?>

<table border="1">
    
    <thead>
        <tr>
            <th>ชื่อสถาบันการศึกษา</th>
            <th>รหัสนักศึกษา</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>เบอร์โทร</th>
            <th>email</th>
        </tr>
</thead>
<tbody>
    <?php foreach ($result as $row) { ?>
        <tr>
            <td><?php echo $row['educationname'];?> </td>
            <td><?php echo $row['studentID'];?> </td>
            <td><?php echo $row['fistname'];?> </td>
            <td><?php echo $row['listname'];?> </td>
            <td><?php echo $row['tellnumber'];?> </td>
            <td><?php echo $row['email'];?> </td>
        </tr>
        
<?php } ?>
</tbody>
</table>


<?php mysqli_close($conn); ?>
</body>
</html>


