<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two-Digit Decimal Combinations</title>
    <style>
        body {
            font-family: "Segoe UI", Consolas, Arial, sans-serif;
            background: linear-gradient(120deg, #eef2f7, #d9e4f5);
            padding: 40px 15px;
        }
 
        .container {
            max-width: 900px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }
 
        h2 {
            text-align: center;
            color: #ff0000;
            margin-bottom: 25px;
            letter-spacing: 1px;
        }
 
        .output {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(60px, 1fr));
            gap: 12px;
        }
 
        .number {
            background: #df961f;
            color: #ff0000;
            text-align: center;
            padding: 12px 0;
            border-radius: 8px;
            font-weight: 600;
            box-shadow: 0 2px 5px rgba(0,0,0,0.08);
            transition: transform 0.15s ease, background 0.15s ease;
        }
 
        .number:hover {
            background: #e1d0ca;
            transform: scale(1.05);
        }
 
        footer {
            margin-top: 25px;
            text-align: center;
            font-size: 13px;
            color: #666;
        }
    </style>
</head>
 
<body>
<div class="container">
    <h2>two-digit decimal combination</h2>
 
    <div class="output">
        <?php
        for ($i = 0; $i <= 9; $i++) {
            for ($j = 0; $j <= 9; $j++) {
                echo "<div class='number'>{$i}{$j}</div>";
            }
        }
        ?>
    </div>
 
</div>
</body>
</html>
 