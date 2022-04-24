<?php
    require('../backend/files/connection.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $o_num = $_POST['number'];
    $o_food = $_POST['food'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    
    
    //Save Order
    try{
        if($result == ""){
            $stmt = $pdo->prepare("INSERT INTO `orders` (`customer_name`, `customer_email`, `phone`, `amount`, `food`, `address`) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([
              $name,$email,$phone,$o_num,$o_food,$address
            ]);  
          }
    }catch  (Exception $ex){ $result = $ex->getMessage(); }

    if(isset($_POST['name'])){
        if($result == ""){
            echo "
            <div class='content'>
                    <div class='message'>
                        <h1>Order Recieved Successfully!</h1>
                    </div>
                        <div class='orderT'>
                            <p><u>Order Details:</u></p>
                        </div>
                        <div class='orderDetails'>
                            <div class='name'>
                                <p>Name:$name</p>
                            </div>
                            <div class='email'>
                                <p>E-Mail:$email</p>
                            </div>
                            <div class='phone'>
                                <p>Phone: $phone </p>
                            </div>
                            <div class='order'>
                                <p><u>$o_num</u> $o_food</p>
                            </div>
                        </div>
            </div>";
        }else{
            echo "<div class='err-message'>$result</div>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order</title>
    <style>
        body{
            background-color: beige;
        }
        .content{
            border: 1px solid black;
        }
        .message{
            color: blue;
            text-align: center;
        }
        .orderT{
            font-size: large;
            color:red;
            display: flex;
            justify-content: center;
            justify-items: center;
        }
        .orderDetails{
            margin: 0px 42vw;
            width: 100%;
        }
    </style>
</head>
<body>
    
</body>
</html>
