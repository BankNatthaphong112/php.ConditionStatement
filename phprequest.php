<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>การใช้ PHP Request $_REQUEST</title>
</head>
<body>
    <h1>โปรดกรอกชื่อของท่าน</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="post">
        โปรดกรอกชื่อของท่าน : <input type="text" name="fname">
        <input type ="submit">
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
           // $name = htmlspecialchars($_REQUEST['fname']);
           $name = htmlspecialchars($_POST['fname']);
            if (empty($name)) {
                echo "ชื่อเป็นที่ว่าง";
            }else{
                echo "ยินดีต้อนรับคุณ ".$name;
            }
        }
    ?>
    
</body>
</html>