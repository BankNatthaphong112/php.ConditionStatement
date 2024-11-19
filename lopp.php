<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h2> While loop </h2>";
    echo"<br>";
    $x = 1 ;
    while($x <= 5){if ($x == 3) break;
        echo "รอบที่ $x <br>";
        $x++;
         
    }
    echo"-------------------------------------";
    echo"<br>";

    echo "<h2> do...While loop </h2>";
    echo"<br>";
    $x = 1 ;
    do{
        echo "รอบที่ $x <br>";
        $x++;
    }
    while($x <= 5);
    echo"-------------------------------------";
    echo"<br>";

    echo "<h2> For loop </h2>";
    for ($i=0; $i < 10 ; $i++) { 
        echo "for รอบที่ $i <br>";
    }
    echo"-------------------------------------";
    echo"<br>";
    echo "<h2> For loop </h2>";
    for ($i=1; $i <+5 ; $i++){
        for ($j=1; $j <= $i ; $j++) { 
            echo "*";
            
        }
        echo "<br>";
    } 

    echo"-------------------------------------";
    echo"<br>";
    echo "<h2> foreach loop </h2>";
    $pet = array("แมว","สุนัข","ปลาทอง","หมูเด้ง");
    foreach ($pet as $value){
        echo "ฉันชอบ".$value."<br>";
    }
    echo"-------------------------------------";
    echo"<br>";
    echo "<h1>Foreach Loop เเบบ key => value</h1>";
    $food = array("หมวย"=>"ส้มตำ","บูม"=>"หมูย่าง","บีม"=>"ผัดกระเพรา"); 
    foreach ($food as $student => $value) {
        echo "ชื่อ$student ชอบกิน$value";
    }


    ?>
</body>
</html>