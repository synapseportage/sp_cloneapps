<?php
 require ('../../files/connection.php');

 try{
    if($result == ""){
        //Orders ----------------------------------------------
        $stmt = $pdo->prepare("SELECT * FROM `orders`");
        $stmt->execute();  
        $sumorders = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $orderRow = $stmt->rowCount();
        //Burger ----------------------------------------------
        $stmt = $pdo->prepare("SELECT * FROM `burger`");
        $stmt->execute();  
        $burgerRow = $stmt->rowCount();

        //Sweeets ----------------------------------------------
        $stmt = $pdo->prepare("SELECT * FROM `sweet`");
        $stmt->execute();  
        $sweetRow = $stmt->rowCount();

        //Ice-Cream ----------------------------------------------
        $stmt = $pdo->prepare("SELECT * FROM `icecream`");
        $stmt->execute();  
        $icecreamRow = $stmt->rowCount();

        //Sweeets ----------------------------------------------
        $stmt = $pdo->prepare("SELECT * FROM `cakes`");
        $stmt->execute();  
        $cakesRow = $stmt->rowCount();

        //Burger ----------------------------------------------
        $stmt = $pdo->prepare("SELECT * FROM `drink`");
        $stmt->execute();  
        $drinkRow = $stmt->rowCount();

        //Sweeets ----------------------------------------------
        $stmt = $pdo->prepare("SELECT * FROM `cupcake`");
        $stmt->execute();  
        $cupcakeRow = $stmt->rowCount();
      }
    }catch  (Exception $ex){ 
        $result = $ex->getMessage(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        <?php require ('style.css'); ?>
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <center>
    <div class="linkname">
        <h1><span>Dashboard</span></h1>
    </div>
    </center>
    <section class="box" id="summary">
        <div class="order">
            <h1>Orders</h1>
            <p><?php echo $orderRow ?></p>
        </div>
        <div class="budget">
            <h1>Budget</h1>
            <p>3500 AFs</p>
        </div>
        <div class="burger">
            <h1>Available burger</h1>
            <p><?php echo $burgerRow ?></p>
        </div>
        <div class="sweets">
            <h1>Available sweets</h1>
            <p><?php echo $sweetRow ?></p>
        </div>
        <div class="icecream">
            <h1>Available icecream</h1>
            <p><?php echo $icecreamRow ?></p>
        </div>
        <div class="cake">
            <h1>Available cakes</h1>
            <p><?php echo $cakesRow ?></p>
        </div>
        <div class="drinks">
            <h1>Available drinks</h1>
            <p><?php echo $drinkRow ?></p>
        </div>
        <div class="cupcakes">
            <h1>Available cupcakes</h1>
            <p><?php echo $cupcakeRow ?></p>
        </div>
        
    </section>

    <section class="analysis">
        
    </section>
</body>
</html>