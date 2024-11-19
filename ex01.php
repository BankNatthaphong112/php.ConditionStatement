<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>การใช้คำสัง Condition (กลุ่มคำสั่ง if)</h1>
    <?php 
    echo "<h2> คำสั่ง if </h2>";
    $x = 5;
    $y = 8;
    echo "$x = $x";
    echo "$y = $y";
    if($x < $y){
        echo "ค่าตัวแปล x น้อยกว่าค่าตัวแปล y <br>";
    }
    else{
        echo "ค่าตัวแปล y น้อยกว่าค่าตัวแปล x <br>";
    }
    echo "-------------------------------------";
    echo "<h2> Short head if</h2>";
    $score = 55;
    if($score >= 50) echo "ขอแสดงความยินดีคุณสอบผ่าน";
    echo "<br>";
    $resual = $score >= 50 ? "ได้เกรด P ":"ได้เกรด f";
    echo "<br>";
    echo "ผลการเรียนของคุณ".$resual;
    echo "<br>";
    echo "-------------------------------------";
    echo "<h2> ตำสั่ง switch case</h2>";
    echo "<br>";
    $pet = ' ';
    switch ($pet){
        case 'Cat':
        echo "คุณชอบนอนเหมือนแมว";
        break;

        case 'Dog':
        echo "คุณชอบทำเหมือนหมา";
        break;

        case 'Bird':
        echo "คุณชอบพูดมากเหมือนนก";
        break;

        default:
        echo "คุณเป็นมนุษย์";
        break;
    }

    ?>
</body>
</html>