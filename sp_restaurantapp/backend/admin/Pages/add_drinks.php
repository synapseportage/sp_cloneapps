<?php
 require ('../../files/connection.php');
 try {
     //Orders ----------------------------------------------
     $stmt = $pdo->prepare("SELECT * FROM `drink`");
     $stmt->execute();  
     $drinks = $stmt->fetchAll(PDO::FETCH_ASSOC);
     $drinkRow = $stmt->rowCount();
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
    <title>Drinks</title>
</head>
<body>
    <div class="burgerlist">
    <div class="table">
        <table>
            <tr>
                <td colspan="4"><a href="#form" class="btn">Add New Drink</span></a></td>
            </tr>
            <tr>
                <th class="left">ID</th>
                <th>Drink Name</th>
                <th>Drink Description</th>
                <th class="right">Price</th>
            </tr>
            <?php foreach ($drinks as $key => $drink): ?>
                <tr>
                    <td ><?php echo $key?></td>
                    <td><?php echo $drink['drinkname']?></td>
                    <td><?php echo $drink['discription']?></td>
                    <td><?php echo $drink['price']?></td>
                </tr>
                <?php endforeach; ?>
        </table>
    </div>
    </div>
    <div class="form" id="form">
        <center>
            <div class="linkname">
                <h1>Add A New <span>Drink</span></h1>
            </div>
        </center>
        <form action="php files/addfood.php" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="name"><span>Drink</span> Name</label>
                    <div class="col-75">
                        <input type="text" name="name" placeholder="Drink Name . . ." require>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Description"><span>Drink</span> Description</label>
                    <div class="col-75">
                        <textarea type="text" name="description" placeholder="Drink Description . . ." ></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="price"><span>Drink</span> Price</label>
                    <div class="col-75">
                        <input type="number" name="price" placeholder="Drink Price . . ." require>
                    </div>
                </div>
            </div>
            <div class="row">
                <input type="submit" name="submitdrink" value="Save">
            </div>
        </form>
    </div>
</body>
</html>