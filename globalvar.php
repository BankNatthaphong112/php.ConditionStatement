
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Global Variable</h1>
    <?php
    $x = 75;
    echo "ค่าของ x ==> ".$x;
    echo "<br>";

    function myfunction(){
        //echo "อ่านคำจาก function 1 ค่าของ ==> ".$GLOBALS['x']; //เรียกใช้ x นอก fn
        global $x;
        $x = 35;
        echo "อ่านคำจาก function ค่าของ ==> ".$x;
    }
    myfunction();
    echo "<hr>";
    echo "ค่าของ ==>".$x;

    echo "<hr>";

    echo "<h2>การใช้ข้อมูลจาก Server ด้วย \$_SEVER</h2>";

    //echo $_SERVER['PHP_SELF']."<br>";
    //echo $_SERVER['SERVER_NAME']."<br>";
    //echo $_SERVER['HTTP_HOST']."<br>";
    //echo $_SERVER['RHTTP_REFERER']."<br>";
    //echo $_SERVER['HTTP_USER_AGENT']."<br>";
    echo $_SERVER['SCRIPT_NAME']."<br>";
    //echo "<hr>";
    ?>
</body>
</html>