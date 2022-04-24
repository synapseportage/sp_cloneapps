<?php
    require('../connection.php');

    try{
        if($result == ""){
            $stmt = $pdo->prepare("SELECT * FROM `drink`");
            $stmt->execute();  
            $drinks = $stmt->fetchAll(PDO::FETCH_ASSOC);
          }
    }catch  (Exception $ex){ $result = $ex->getMessage(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinks</title>
    <link rel="shortcut icon" type="image/png" href="../../../images/favicon.png"/>
</head>
<body>

<section class="popular" id="popular">

    <h1 class="heading"> most <span>popular Drinks</span> </h1>

    <div class="box-container">
        <?php
            foreach ($drinks as $drink): ?>
                <div class="box">
                        <span class="price"> <?php echo "$drink[price] AFS" ?> </span>
                        <div class="text">
                            <p style="
                                height:25rem;
                                object-fit: cover;
                                width:100%;
                                border-radius: .5rem;
                                padding-top: 15vh;
                                font-size:20px;"
                            ><?php echo "$drink[discription]" ?></p>
                        </div>
                        <h3><?php echo "$drink[drinkname]" ?></h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <a href="../../order.html" class="btn">order now</a>
                </div> <?php endforeach; ?>
    </div>

</section>
</body>
</html>