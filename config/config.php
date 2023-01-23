<?php 
    // user 
$user = "root";

// db
$dbname = "Blog";
// host 
$host = "localhost";

// pass 
$pass = "Mohammad1400@@";
try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    echo $e->getMessage();
}