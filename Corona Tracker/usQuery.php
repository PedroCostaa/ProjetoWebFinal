<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<p class="pQuery">Number of Corona Virus Cases in the United States</p>
    <?php
    $db = new PDO("mysql:host=localhost;dbname=coronatracker;charset=utf8","root","");
    $Us_cases = $db ->query("SELECT * FROM us_cases");
    foreach($Us_cases as $result){
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