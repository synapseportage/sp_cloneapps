<?php
 require ('../../files/connection.php');
 try {
     //Orders ----------------------------------------------
     $stmt = $pdo->prepare("SELECT * FROM `orders`");
     $stmt->execute();  
     $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
     $orderRow = $stmt->rowCount();
 } catch (Exception $ex) {
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
    <title>See Order</title>
</head>
<body>
    <center>
        <div class="linkname">
            <h1><span>Orders</span></h1>
        </div>
    </center>
    <div class="table">
        <table>
            <tr>
                <th class="left">id</th>
                <th>customer name</th>
                <th>customer email</th>
                <th>phone number</th>
                <th>address</th>
                <th>amount</th>
                <th class="right">food</th>
            </tr>
            <?php foreach ($orders as $key => $order): ?>
                <tr>
                    <td ><?php echo $key?></td>
                    <td><?php echo $order['customer_name']?></td>
                    <td><?php echo $order['customer_email']?></td>
                    <td><?php echo $order['phone']?></td>
                    <td><?php echo $order['address']?></td>
                    <td><?php echo $order['amount']?></td>
                    <td ><?php echo $order['food']?></td>
                </tr>
                <?php endforeach; ?>
        </table>
    </div>
</body>
</html>