

<?php
session_start();
require "../config/config.php";
if(!isset($_SESSION['username'])){
    die("access denied");
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = $conn->query("DELETE FROM category WHERE Id = $id");
    $result = $query->execute();
    if(!$result){
        header("location: http://localhost/Blog/cannot.php");
    }
    else{
        header("location: http://localhost/Blog/categories/categories.php");
    }
}
else{
    echo "not found";
}
?>