<?php
    $con = mysqli_connect("localhost","root","","foodwebsite");

    if(mysqli_connect_errno()){
        echo "Connot Connect";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .danger{
            color: red;
            font-size: 36px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<section class="order" style="padding: 10px;">
    
    <h1 class="heading"> <span>Admin</span> Login </h1>

    <div class="row">
        <form action="#" method="post">

            <div class="inputBox">
                <input type="text" placeholder="Username . . " name="username" required style="width: 100%; text-align:center; margin:0 20%;">
            </div>

            <div class="inputBox">
                <input type="password"  placeholder="Password . . ." name="password"  required style="width: 100%; text-align:center; margin:0 20%;">
            </div>
            <input type="submit" class="btn" name="login" style="width: 60%; margin:0 20%;">
        </form>
        <a href="../../index.html" style="font-size:30px;display:block;float:left; color:chocolate">Go Back</a>
    </div>

</section>
</body>
</html>

<!------------------PHP----------------------->
<?php
if(isset($_POST['login'])){
    $query = "SELECT * FROM `admins` WHERE `username` LIKE '$_POST[username]' AND `password` LIKE '$_POST[password]'";
    $res = mysqli_query($con,$query);

    if(mysqli_num_rows($res)==1){
        session_start();
        $_SESSION['AdminloginId']=$_POST['username'];
        header("location:admin.php");
    }else{
        echo "<center><div class='danger'>Username or Password is Incorrect!!!</div></center>";
    }
}

?>