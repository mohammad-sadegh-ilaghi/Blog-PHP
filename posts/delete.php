<?php
require "../config/config.php";
session_start();
if(!isset($_SESSION['username'])){
    die("access denind");
  }
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = $conn->prepare("DELETE FROM post WHERE Id = :id");
    $result = $query->execute([':id' => $id]);
    if($result){
        header('location: http://localhost/Blog/posts/posts.php');
    }
    else{
        echo "can not delete have one problem";
    }

}
else{
    echo "not founded";
}

?>