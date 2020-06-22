<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<p>Number of Corona Virus Cases in Brazil</p>
    <?php
    $db = new PDO("mysql:host=localhost;dbname=coronatracker;charset=utf8","root","");
    $br_cases = $db ->query("SELECT * FROM br_cases");
    foreach($br_cases as $result){
        ?>
        <div class="container">
          <ul>
            <li>State: <?= $result["states"]?></li>
            <li>Confirmed Cases: <?= $result["confirmed_cases"] ?></li>
            <li>Confirmed Deaths: <?= $result["confirmed_deaths"] ?></li>
            <li>Date: <?= $result["date"] ?> </li>
          </ul>  
        </div>
        <?php
        }
        ?>
</body>
</html>