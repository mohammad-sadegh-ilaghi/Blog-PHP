<?php require "../includes/header.php";?>
<?php require "../config/config.php";?>
<?php 
if(isset($_GET['id'])){
    $id = $_GET["id"];
    $query = $conn->query("SELECT * FROM category WHERE Id = $id");
    $query->execute();
    $category = $query->fetch(PDO::FETCH_OBJ);

}
else{
    echo "not found";
}
if(isset($_GET['id']) and isset($_POST['submit'])){
    if($_POST['name'] == ''){
        echo "please wirte the name"; 
    }

    $name = $_POST['name'];
    try{
    $query_update = $conn->query("UPDATE category SET name = '$name' WHERE Id = $id");

        $result = $query_update->execute();
    }
    catch(Exception $e){
        die($e->getMessage());
    }
    if($result){
        header("location:http://localhost/Blog/categories/categories.php");
    }
    else{
        echo "can not update";
    }
}
?>
<form method="POST" action="" enctype="multipart/form-data">
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="text" name="name" value="<?php echo $category->name;?>"  class="form-control" placeholder="category name" />
    </div>

    <!-- Submit button -->
    <button type="submit" name="submit" class="btn btn-warning  mb-4 text-center">update</button>


</form>


<?php require "../includes/footer.php";?>
