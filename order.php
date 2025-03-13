<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzerman</title>
</head>
<body>
    <?php
    $countM = $_GET["margherita"];
    $countP = $_GET["parma"];
    $countC = $_GET["carpicciosa"];

    echo 'Ilosc margherita: ' . $countM . '<br>Ilosc parma: ' . $countM . '<br>Ilosc carpicciosa: ' . $countP;
    ?>
</body>
</html>