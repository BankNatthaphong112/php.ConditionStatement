<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์พื้นที่สามเหลี่ยม</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .result-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        h1 {
            color: #28a745;
        }
        p {
            font-size: 18px;
            margin: 10px 0;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            background: #007bff;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $base = isset($_POST['base']) ? (float) $_POST['base'] : 0;
            $height = isset($_POST['height']) ? (float) $_POST['height'] : 0;

            if ($base > 0 && $height > 0) {
                $area = 0.5 * $base * $height;
                echo "<h1>ผลลัพธ์</h1>";
                echo "<p>พื้นที่ของสามเหลี่ยมคือ <strong>" . number_format($area, 2) . " ตารางหน่วย</strong></p>";
            } else {
                echo "<h1>ข้อผิดพลาด</h1>";
                echo "<p>กรุณากรอกค่าความยาวฐานและความสูงที่ถูกต้อง</p>";
            }
        } else {
            echo "<h1>ข้อผิดพลาด</h1>";
            echo "<p>ไม่อนุญาตให้เข้าถึงหน้านี้โดยตรง</p>";
        }
        ?>
        <a href="tringle_area_form.php">กลับไปยังหน้าฟอร์ม</a>
    </div>
    <?php
    function triangleArea($h,$b){
        $a = 0.5 * $h * $b;
        return $a;
    }
    ?>
</body>
</html>
