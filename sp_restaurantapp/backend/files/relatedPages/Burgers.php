<?php
    require('../connection.php');

    try{
        if($result == ""){
            $stmt = $pdo->prepare("SELECT * FROM `burger`");
            $stmt->execute();  
            $burgers = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <title>Burgers</title>
    <link rel="shortcut icon" type="image/png" href="../../../images/favicon.png"/>
</head>
<body>

<section class="popular" id="popular">

    <h1 class="heading"> most <span>popular</span> foods </h1>

    <div class="box-container">
        <?php
            foreach ($burgers as $burger): ?>
                <div class="box">
                        <span class="price"> <?php echo "$burger[price] AFS" ?> </span>
                        <div class="text">
                            <p style="
                                height:25rem;
                                object-fit: cover;
                                width:100%;
                                border-radius: .5rem;
                                padding-top: 15vh;
                                font-size:20px;"
                            ><?php echo "$burger[discription]" ?></p>
                        </div>
                        <h3><?php echo "$burger[burger_name]" ?></h3>
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