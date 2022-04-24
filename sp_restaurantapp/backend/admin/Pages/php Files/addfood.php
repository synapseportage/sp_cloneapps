<?php
require ('../../../files/connection.php');
try {
    if(isset($_POST['submitburger'])){
            $burgerName = $_POST['burgername'];
            $burgerDes = $_POST['burgerdescription'];
            $burgerPrice = $_POST['burgerprice'];
            if($result==""){
                $stmt = $pdo->prepare("INSERT INTO `burger` (`id`, `burger_name`, `discription`, `price`) VALUES (NULL, '$burgerName', '$burgerDes', '$burgerPrice');");
                $stmt->execute();
            }
        }
        elseif (isset($_POST['submitcake'])){
            $cakeName = $_POST['cakename'];
            $cakeDes = $_POST['cakedescription'];
            $cakePrice = $_POST['cakeprice'];
            if($result == ""){
                $stmt = $pdo->prepare("INSERT INTO `cakes` (`id`, `cake_name`, `discription`, `price`) VALUES (NULL, '$cakeName', '$cakeDes', '$cakePrice'); ");
                $stmt->execute();
            }
        }elseif (isset($_POST['submitsweet'])){
            $sweetName = $_POST['name'];
            $sweetDes = $_POST['description'];
            $sweetPrice = $_POST['price'];
            if($result == ""){
                $stmt = $pdo->prepare("INSERT INTO `sweet` (`id`, `sweetname`, `discription`, `price`) VALUES (NULL, '$sweetName', '$sweetDes', '$sweetPrice');");
                $stmt->execute();
            }
        }elseif (isset($_POST['submitcupcake'])){
            $cupcakeName = $_POST['name'];
            $cupcakeDes = $_POST['description'];
            $cupcakePrice = $_POST['price'];
            if($result == ""){
                $stmt = $pdo->prepare("INSERT INTO `cupcake` (`id`, `cupcake`, `discription`, `price`) VALUES (NULL, '$cupcakeName', '$cupcakeDes', '$cupcakePrice');");
                $stmt->execute();
            }
        }
        elseif (isset($_POST['submitdrink'])){
            $drinkName = $_POST['name'];
            $drinkDes = $_POST['description'];
            $drinkPrice = $_POST['price'];
            if($result == ""){
                $stmt = $pdo->prepare("INSERT INTO `drink` (`id`, `drinkname`, `discription`, `price`) VALUES (NULL, '$drinkName', '$drinkDes', '$drinkPrice');");
                $stmt->execute();
            }
        }
        elseif (isset($_POST['submiticecream'])){
            $icecreamName = $_POST['name'];
            $icecreamDes = $_POST['description'];
            $icecreamPrice = $_POST['price'];
            if($result == ""){
                $stmt = $pdo->prepare("INSERT INTO `icecream` (`id`, `icecream_name`, `discription`, `price`) VALUES (NULL, '$icecreamName', '$icecreamDes', '$icecreamPrice');");
                $stmt->execute();
            }
        }
} catch (Exception $ex) {
    $result = $ex->getMessage();
}

if(isset($_POST['submitburger'])){
    if($result == ""){
        echo "
            <div class='successMessage'>
                <center>
                    <h1> $_POST[burger_name] was Registered Successfully!!</h1>
                </center>
            </div>
        ";
    }
    else{
        echo "
            <div class='errMessage'>
                <center>
                    <h1> $_POST[burger_name] was NOT Registered!!</h1>
                    <p>$result</p>
                </center>
            </div>
            ";
    }
}
if(isset($_POST['submitcake'])){
    if($result == ""){
        echo "
            <div class='successMessage'>
                <center>
                    <h1> $cakeName was Registered Successfully!!</h1>
                </center>
            </div>
        ";
    }
    else{
        echo "
            <div class='errMessage'>
                <center>
                    <h1> $cakeName was NOT Registered!!</h1>
                    <p>$result</p>
                </center>
            </div>
            ";
    } 
}
if(isset($_POST['submitsweet'])){
    if($result == ""){
        echo "
            <div class='successMessage'>
                <center>
                    <h1> $_POST[name] was Registered Successfully!!</h1>
                </center>
            </div>
        ";
    }
    else{
        echo "
            <div class='errMessage'>
                <center>
                    <h1> $_POST[name] was NOT Registered!!</h1>
                    <p>$result</p>
                </center>
            </div>
            ";
    } 
}
if(isset($_POST['submitcupcake'])){
    if($result == ""){
        echo "
            <div class='successMessage'>
                <center>
                    <h1> $_POST[name] was Registered Successfully!!</h1>
                </center>
            </div>
        ";
    }
    else{
        echo "
            <div class='errMessage'>
                <center>
                    <h1> $_POST[name] was NOT Registered!!</h1>
                    <p>$result</p>
                </center>
            </div>
            ";
    } 
}
if(isset($_POST['submitdrink'])){
    if($result == ""){
        echo "
            <div class='successMessage'>
                <center>
                    <h1> $_POST[name] was Registered Successfully!!</h1>
                </center>
            </div>
        ";
    }
    else{
        echo "
            <div class='errMessage'>
                <center>
                    <h1> $_POST[name] was NOT Registered!!</h1>
                    <p>$result</p>
                </center>
            </div>
            ";
    } 
}
if(isset($_POST['submiticecream'])){
    if($result == ""){
        echo "
            <div class='successMessage'>
                <center>
                    <h1> $_POST[name] was Registered Successfully!!</h1>
                </center>
            </div>
        ";
    }
    else{
        echo "
            <div class='errMessage'>
                <center>
                    <h1> $_POST[name] was NOT Registered!!</h1>
                    <p>$result</p>
                </center>
            </div>
            ";
    } 
}
?>
