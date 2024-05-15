<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time and date converter</title>
    <style>
        body {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            width: 300px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="date"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="POST" action="convert.php">
        <div>
            <label for="time">Time</label>
            <input type="text" id="time" name="time" placeholder="hh:mm:ss">
            <label for="date">Date</label>
            <input type="date" id="date" name="date">
            <label for="timezone">Time Zone</label>
            <select id="timezone" name="timezone">
                <option value="Pacific/Midway">(UTC-11:00) Pacific/Midway</option>
                <option value="America/Anchorage">(UTC-09:00) America/Anchorage</option>
                <option value="America/Los_Angeles">(UTC-08:00) America/Los_Angeles</option>
                <option value="America/Denver">(UTC-07:00) America/Denver</option>
                <option value="America/Chicago">(UTC-06:00) America/Chicago</option>
                <option value="America/New_York">(UTC-05:00) America/New_York</option>
                <option value="America/Caracas">(UTC-04:30) America/Caracas</option>
                <option value="America/Halifax">(UTC-04:00) America/Halifax</option>
                <option value="America/St_Johns">(UTC-03:30) America/St_Johns</option>
                <option value="America/Argentina/Buenos_Aires">(UTC-03:00) America/Argentina/Buenos_Aires</option>
                <option value="America/Noronha">(UTC-02:00) America/Noronha</option>
                <option value="Atlantic/Azores">(UTC-01:00) Atlantic/Azores</option>
                <option value="UTC">(UTC) UTC</option>
                <option value="Europe/London">(UTC+00:00) Europe/London</option>
                <option value="Europe/Paris">(UTC+01:00) Europe/Paris</option>
                <option value="Europe/Moscow">(UTC+03:00) Europe/Moscow</option>
                <option value="Asia/Dubai">(UTC+04:00) Asia/Dubai</option>
                <option value="Asia/Kolkata">(UTC+05:30) Asia/Kolkata</option>
                <option value="Asia/Shanghai">(UTC+08:00) Asia/Shanghai</option>
                <option value="Asia/Tokyo">(UTC+09:00) Asia/Tokyo</option>
                <option value="Australia/Sydney">(UTC+10:00) Australia/Sydney</option>
                <option value="Pacific/Auckland">(UTC+12:00) Pacific/Auckland</option>
                <option value="Pacific/Honolulu">(UTC-10:00) Pacific/Honolulu</option>
            </select>
            <input type="submit" value="Convert">
        </div>
    </form>
</body>
</html>