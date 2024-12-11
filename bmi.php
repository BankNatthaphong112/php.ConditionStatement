<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณค่า BMI</title>
    <style>
       body {
    font-family: 'Comic Sans MS', cursive, sans-serif;
    background-color: #f9f9f9;
    color: #4a4a4a;
    margin: 0;
    padding: 0;
}

.container {
    width: 90%;
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    border: 1px solid #ddd;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #ff7f50;
    margin-bottom: 20px;
    text-transform: uppercase;
}

form label {
    font-weight: bold;
    color: #6b6b6b;
    margin-bottom: 5px;
    display: block;
}

input[type="text"], input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f4f4f4;
    color: #4a4a4a;
}

button {
    padding: 10px;
    width: 100%;
    background-color: #ff7f50;
    color: #fff;
    font-weight: bold;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1em;
}

button:hover {
    background-color: #ff6347;
}

.result {
    margin-top: 20px;
    padding: 15px;
    background-color: #ffe4e1;
    border-left: 5px solid #ff7f50;
    border-radius: 5px;
    color: #4a4a4a;
}

    </style>
</head>
<body>
<div class="container">
    <h1>โปรแกรมคำนวณค่า BMI</h1>
    <form method="POST">
        <label for="first_name">ชื่อ:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">นามสกุล:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="age">อายุ:</label>
        <input type="number" id="age" name="age" required>

        <label for="weight">น้ำหนัก (กก.):</label>
        <input type="number" id="weight" name="weight" required step="0.1">

        <label for="height">ส่วนสูง (ซม.):</label>
        <input type="number" id="height" name="height" required step="0.1">

        <button type="submit">คำนวณ BMI</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first_name = htmlspecialchars($_POST['first_name']);
        $last_name = htmlspecialchars($_POST['last_name']);
        $age = (int)$_POST['age'];
        $weight = (float)$_POST['weight'];
        $height = (float)$_POST['height'] / 100; // แปลงเป็นเมตร

        if ($height > 0) {
            $bmi = $weight / ($height * $height);

            // แปลผล BMI
            if ($bmi < 18.5) {
                $result_text = "น้ำหนักน้อยกว่ามาตรฐาน (ผอม)";
                $advice = "คุณควรรับประทานอาหารที่มีพลังงานเพิ่มขึ้น และออกกำลังกายให้พอเหมาะ";
            } elseif ($bmi < 24.9) {
                $result_text = "น้ำหนักอยู่ในเกณฑ์มาตรฐาน";
                $advice = "คุณมีสุขภาพดี! รักษาน้ำหนักนี้ไว้ด้วยการออกกำลังกายและกินอาหารให้สมดุล";
            } elseif ($bmi < 29.9) {
                $result_text = "น้ำหนักเกินมาตรฐาน (ท้วม)";
                $advice = "ควรลดอาหารที่มีไขมันและน้ำตาล และออกกำลังกายสม่ำเสมอ";
            } else {
                $result_text = "อ้วน (เกินมาตรฐานมาก)";
                $advice = "ควรปรึกษาแพทย์และวางแผนการลดน้ำหนักอย่างเหมาะสม";
            }

            echo "<div class='result'>";
            echo "<p><strong>ชื่อ:</strong> $first_name $last_name</p>";
            echo "<p><strong>อายุ:</strong> $age ปี</p>";
            echo "<p><strong>ค่า BMI:</strong> " . number_format($bmi, 2) . " ($result_text)</p>";
            echo "<p><strong>คำแนะนำ:</strong> $advice</p>";
            echo "</div>";
        } else {
            echo "<div class='result'>";
            echo "<p>กรุณากรอกส่วนสูงให้ถูกต้อง</p>";
            echo "</div>";
        }
    }
    ?>
</div>
</body>
</html>
