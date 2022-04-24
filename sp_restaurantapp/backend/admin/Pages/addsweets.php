<?php
 require ('../../files/connection.php');
 try {
     //Orders ----------------------------------------------
     $stmt = $pdo->prepare("SELECT * FROM `sweet`");
     $stmt->execute();  
     $sweets = $stmt->fetchAll(PDO::FETCH_ASSOC);
     $sweetRow = $stmt->rowCount();
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
    <title>Sweets</title>
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
                <th>Sweet Name</th>
                <th>Sweet Description</th>
                <th class="right">Price</th>
            </tr>
            <?php foreach ($sweets as $key => $sweet): ?>
                <tr>
                    <td ><?php echo $key?></td>
                    <td><?php echo $sweet['sweetname']?></td>
                    <td><?php echo $sweet['discription']?></td>
                    <td><?php echo $sweet['price']?></td>
                </tr>
                <?php endforeach; ?>
        </table>
    </div>
    </div>
    <div class="form" id="form">
        <center>
            <div class="linkname">
                <h1>Add A New <span>Sweet</span></h1>
            </div>
        </center>
        <form action="php Files/addfood.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="name"><span>Sweet</span> Name</label>
                    <div class="col-75">
                        <input type="text" name="name" placeholder="Cake Name . . ." require>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Description"><span>Sweet</span> Description</label>
                    <div class="col-75">
                        <textarea type="text" name="description" placeholder="Cake Description . . ." ></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="price"><span>Sweet</span> Price</label>
                    <div class="col-75">
                        <input type="number" name="price" placeholder="Cake Price . . ." require>
                    </div>
                </div>
            </div>
            <div class="row">
                <input type="submit" name="submitsweet" value="Save">
            </div>
        </form>
        
    </div>
</body>
</html>