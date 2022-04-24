<?php
 require ('../../files/connection.php');
 try {
     //Orders ----------------------------------------------
     $stmt = $pdo->prepare("SELECT * FROM `burger`");
     $stmt->execute();  
     $burgers = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <title>Add Burgers</title>
</head>
<body>
    <div class="burgerlist">
    <div class="table">
        <table>
            <tr>
                <td colspan="4"><a href="#form" class="btn">Add New Burger</span></a></td>
            </tr>
            <tr>
                <th class="left">ID</th>
                <th>Burger Name</th>
                <th>Burger Description</th>
                <th class="right">Price</th>
            </tr>
            <?php foreach ($burgers as $key => $burger): ?>
                <tr>
                    <td ><?php echo $key?></td>
                    <td><?php echo $burger['burger_name']?></td>
                    <td><?php echo $burger['discription']?></td>
                    <td><?php echo $burger['price']?></td>
                </tr>
                <?php endforeach; ?>
        </table>
    </div>
    </div>
    <div class="form" id="form">
        <center>
            <div class="linkname">
                <h1>Add A New <span>Burger</span></h1>
            </div>
        </center>
        <form action="php Files/addfood.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="burgername"><span>Burger</span> Name</label>
                    <div class="col-75">
                        <input type="text" name="burgername" placeholder="Burger Name . . ." require>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="burgerDescription"><span>Burger</span> Description</label>
                    <div class="col-75">
                        <textarea type="text" name="burgerdescription" placeholder="Burger Description . . ." ></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="burgerprice"><span>Burger</span> Price</label>
                    <div class="col-75">
                        <input type="number" name="burgerprice" placeholder="Burger Price . . ." require>
                    </div>
                </div>
            </div>
            <div class="row">
                <input type="submit" name="submitburger" value="Save">
            </div>
        </form>
        
    </div>
</body>
</html>