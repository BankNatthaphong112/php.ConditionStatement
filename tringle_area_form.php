<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มคำนวณพื้นที่สามเหลี่ยม</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"] {
            background-color: #007bff;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        button[type="reset"] {
            background-color: #dc3545;
            margin-top: 10px;
        }
        button[type="reset"]:hover {
            background-color: #b02a37;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>โปรแกรมคำนวณหาพื้นที่สามเหลี่ยม</h1>
        <form action="triangle_area.php" method="POST">
            <label for="base">ความยาวฐาน (Base):</label>
            <input type="number" id="base" name="base" step="0.01" required>

            <label for="height">ความสูง (Height):</label>
            <input type="number" id="height" name="height" step="0.01" required>

            <button type="submit">คำนวณ</button>
            <button type="reset">ล้างข้อมูล</button>
        </form>
    </div>
</body>
</html>
