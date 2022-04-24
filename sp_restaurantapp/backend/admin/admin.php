<?php
session_start();
if(!isset($_SESSION['AdminloginId'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        <?php require ('admin.css'); ?>
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="shortcut icon" type="image/png" href="../../images/favicon.png"/>
</head>
<body>
<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>SynapS</a>
    <div id="menu-bar" class="fas fa-bars" ></div>
    <nav class="navbar">
        <h1 style="font-size: 24px;">Welcome <span><?php echo $_SESSION['AdminloginId'];?></span></h1>
    </nav>
        <form action="" method="POST">
            <button class="btn" name="logout">Log Out</button>
        </form>

</header>
<!-------End of Nav--------->

<!-------Content--------->
<section class="content">
    <section class="navigation">
        <div class="info">
            <a href="pages/dashboard.php" target="mainframe"><h3><?php echo $_SESSION['AdminloginId'];?></h3></a>
        </div>
        <div class="links">
            <a href="pages/dashboard.php" target="mainframe">dashboard</a>
            <a href="pages/seeorders.php" target="mainframe">See Orders</a>
            <a href="pages/addburger.php" target="mainframe">Burgers</a>
            <a href="pages/addcakes.php" target="mainframe">Cakes</a>
            <a href="pages/addsweets.php" target="mainframe">Sweets</a>
            <a href="pages/addcupcakes.php" target="mainframe">Cup-Cakes</a>
            <a href="pages/add_drinks.php" target="mainframe">Drinks</a>
            <a href="pages/addicecream.php" target="mainframe">Ice-Cream</a>
        </div>
    </section>
    <section class="main">
        <iframe name="mainframe" frameborder="0" width="100%" height="100%" src="pages/dashboard.php"></iframe>
    </section>
</section>
</body>
</html>



    <?php 
    //---------------------------  PHP  --------------------------------------
    
        if(isset($_POST['logout'])){
            session_destroy();
            header("location:login.php");
        }
    ?>