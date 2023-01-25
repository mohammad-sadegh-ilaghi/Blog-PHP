<?php require "../includes/header.php";?>
<?php require "../config/config.php";?>
<?php 
if(isset($_POST['submit'])){
    if($_POST['name'] == ''){
        echo "please wirte the name"; 
    }
    $name = $_POST['name'];
    try{
        $query_update = $conn->prepare("INSERT INTO category(name, created_at) VALUES(:name, CURRENT_TIMESTAMP())");
        $result = $query_update->execute([':name'=> $name]);
        
    }catch(Exception $e){
        die($e->getMessage());
    }
    if($result){
        header("location: http://localhost/Blog/categories/categories.php");
    }
    else{
        echo "can not update";
    }
}
?>
<form method="POST" action="" enctype="multipart/form-data">
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="text" name="name"  class="form-control" placeholder="category name" />
    </div>

    <!-- Submit button -->
    <button type="submit" name="submit" class="btn btn-warning  mb-4 text-center">create</button>


</form>


<?php require "../includes/footer.php";?>
