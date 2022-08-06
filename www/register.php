<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register ระบบนักศึกษา</title>

    <link rel="stylesheet" href="style.css">
</head>
</head>
    <h1>กรอกข้อมูลสถาบันศึกษา Server </h1>
    <body>

        <div class="header">
            <h2>กรุณากรอกข้อมูล</h2>
        </div>
        <form action="process.php" method="post">

                <label>ชื่อสถาบันการศึกษา:</lable>
                <input type="text" name="educationname"><br>

            
                <label>รหัสนักศึกษา:</lable>
                <input type="text" name="studentID"><br>
            

            
                <label>ชื่อ:</lable>
                <input type="text" name="fistname">
                <label>นามสกุล:</lable>
                <input type="text" name="listname"><br>
            

            
                <label>โทร:</lable>
                <input type="text" name="tellnumber"><br>
            

            
                <label>E-mail:</lable>
                <input type="text" name="email"><br>
            
                
                <input type="submit" value="submit">
                <input type="reset" value="cancel"><br>
            

        </form>
    </body>
</html>
