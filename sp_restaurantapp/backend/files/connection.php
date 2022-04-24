<?php
    $result = "";

    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'foodwebsite';

    try{
        $pdo = new PDO(
            "mysql:host=$dbHost;dbname=$dbName",
            $dbUser,$dbPassword, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
    }catch (Exception $ex){ $result = $ex->getMessage(); }
 

?>