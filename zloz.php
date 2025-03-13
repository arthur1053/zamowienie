<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $con = new mysqli("localhost", "root", "password", "oreder");
    


    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $imie = $_POST['imie'];
        $adres = $_POST['adress'];

        $stmt = $con->prepare('INSERT INTO order_user (imie, adres) VALUES (?, ?)');
        $stmt->bind_param('ss', $imie, $adres);

        if($stmt->execute()){
            echo 'Zamowienie zlozone';
        }
        else{
            echo 'data not inserted'. $stmt->error;
        }
        $stmt->close();
    }
    ?>
</head>
<body>
<form action="" method="POST">
        <label for="carpicciosa">Imie: </label>
        <input type="text" name="imie" id="">
        <label for="carpicciosa">Adresa dostawy: </label>
        <input type="text" name="adress" id="">
        <button type="submit" value="zamow">zamow</button>
    </form>
</body>
</html>