<?php

//data from form
$time = $_POST['time'];
$date = $_POST['date'];
$timezone = $_POST['timezone'];

//make object, using built-in DateTime class
$date_time = new DateTime("$date $time");

//set timezone we needed, default timezone is server timezone
$date_time->setTimezone(new DateTimeZone($timezone));

//result
$result = $date_time->format('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time and Date converter</title>
    <style>
        .result-container {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            width: 300px;
            margin: 0 auto; 
            margin-top: 300px; 
            text-align: center;
        }
        .result {
            font-size: 18px;
            color: #333;
            text-align: center;
        }
        .try-again-container {
            text-align: center; 
        }
        .try-again {
            display: inline-block;
            padding: 10px 20px;

            background-color: #f0f0f0;
            color: #555;
            text-decoration: none;
            border-radius: 20px;
        }
        .try-again:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <p class="result">Time and date in selected time zone (<?= $timezone; ?>): <br><?= $result; ?></p>
        <div class="try-again-container">
            <a class="try-again" href="index.php">Try one more time</a>
        </div>
   </div>
        
</body>
</html>