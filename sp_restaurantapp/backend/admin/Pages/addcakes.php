<?php
 require ('../../files/connection.php');
 try {
     //Orders ----------------------------------------------
     $stmt = $pdo->prepare("SELECT * FROM `cakes`");
     $stmt->execute();  
     $cakes = $stmt->fetchAll(PDO::FETCH_ASSOC);
     $burgerRow = $stmt->rowCount();
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
    <title>Cakes</title>
</head>
<body>
    <div class="burgerlist">
    <div class="table">
        <table>
            <tr>
                <td colspan="4"><a href="#form" class="btn">Add New Cake</span></a></td>
            </tr>
            <tr>
                <th class="left">ID</th>
                <th>Cake Name</th>
                <th>Cake Description</th>
                <th class="right">Price</th>
            </tr>
            <?php foreach ($cakes as $key => $cake): ?>
                <tr>
                    <td ><?php echo $key?></td>
                    <td><?php echo $cake['cake_name']?></td>
                    <td><?php echo $cake['discription']?></td>
                    <td><?php echo $cake['price']?></td>
                </tr>
                <?php endforeach; ?>
        </table>
    </div>
    </div>
    <div class="form" id="form">
        <center>
            <div class="linkname">
                <h1>Add A New <span>Cake</span></h1>
            </div>
        </center>
        <form action="php Files/addfood.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="burgername"><span>Cake</span> Name</label>
                    <div class="col-75">
                        <input type="text" name="cakename" placeholder="Cake Name . . ." require>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="cakeDescription"><span>Cake</span> Description</label>
                    <div class="col-75">
                        <textarea type="text" name="cakedescription" placeholder="Cake Description . . ." ></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="cakeprice"><span>Cake</span> Price</label>
                    <div class="col-75">
                        <input type="number" name="cakeprice" placeholder="Cake Price . . ." require>
                    </div>
                </div>
            </div>
            <div class="row">
                <input type="submit" name="submitcake" value="Save">
            </div>
        </form>
        
    </div>
</body>
</html>