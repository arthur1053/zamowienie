<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <?php
        $con = new mysqli("localhost", "root", "password", "oreder");

        if($con ->connect_error){
            die("Connection failed: " . $con->connect_error);
        }

        if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['margherita'], $_GET['parma'], $_GET['carpicciosa'])){
            $count_of_margherita = (int) $_GET['margherita'];
            $count_of_parma = (int) $_GET['parma'];
            $count_of_carpicciosa = (int) $_GET['carpicciosa'];
            
            $information = "Margherita: $count_of_margherita, Parma: $count_of_parma, Capricciosa: $count_of_carpicciosa";

            $stmt = $con->prepare('INSERT INTO order_user (inform) VALUES (?)');
            $stmt->bind_param('s', $information);

            if($stmt->execute()){
                echo 'data inserted';
            }
            else{
                echo 'data not inserted'. $stmt->error;
            }
        }

    ?>
</head>
<body>
    <h1>Zamowienie</h1>
    <form action="zloz.php" method="GET">
        <label for="">margherita w cenie 10.99</label> 
        <input type="text" name="margherita" id="" value="0">
        <label for="parma">parma w cenie 11.99</label>
        <input type="text" name="parma" id="" value="0">
        <label for="carpicciosa">carpicciosa w cenie 9.89</label>
        <input type="text" name="carpicciosa" id="" value="0">
        <button type="submit" value="zamow">zastosuj</button>
    </form>
    
    <hr>
    
    
</body>
</html>