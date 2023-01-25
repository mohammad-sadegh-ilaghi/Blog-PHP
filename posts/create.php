<?php require "../includes/header.php" ?> 
<?php require "../config/config.php" ?>
<?php


$query_categories = $conn->query("SELECT * FROM category");
$query_categories->execute();
$categories = $query_categories->fetchAll(PDO::FETCH_OBJ);


if(!isset($_SESSION['username'])){
    die("you not logged in and not access to it!!!");
}
    if(isset($_POST["submit"])){
        if($_POST["title"] == '' or $_POST["subtitle"] == '' or $_POST['body'] == ''
             or $_FILES['image']['name'] == '' or $_POST['category_id'] == ''){
            echo "one of the inputs is empty";
        }
        else{
            $title = $_POST['title'];
            $category_id = $_POST['category_id'];
            $subtitle = $_POST['subtitle'];
            $body = $_POST['body'];
            $img = $_FILES['image']['name'];
            $dir = './images/' . basename($img); 
            $user_id = $_SESSION['user_id'];
            $conn->beginTransaction();
            $query = $conn->prepare("INSERT INTO post (title, subtitle, body, img, user_id,category_id , created_at)
                                    VALUES (:title, :subtitle, :body, :img, :user_id, :category_id, CURRENT_TIMESTAMP())");
            try{
                $result =  $query->execute([
                    ':title' => $title,
                    ':subtitle' => $subtitle,
                    ':body' => $body, 
                    ':img' => $img,
                    ':user_id' => $user_id,
                    'category_id'=> $category_id
                ]);
            }catch(Exception $e){
            die($e->getMessage());
            }
                                      
            if(move_uploaded_file($_FILES['image']['tmp_name'], $dir)){
                $conn->commit();
                header("location: http://localhost/Blog/index.php");
            }else{
            $conn->rollBack();
            }

        
        }
    }
?>

            <form method="POST" action="" enctype="multipart/form-data">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" name="title" id="form2Example1" class="form-control" placeholder="title" />
               
              </div>

              <div class="form-outline mb-4">
                <input type="text" name="subtitle" id="form2Example1" class="form-control" placeholder="subtitle" />
            </div>

              <div class="form-outline mb-4">
                <textarea type="text" name="body" id="form2Example1" class="form-control" placeholder="body" rows="8"></textarea>
            </div>

            <div class="form-outline mb-4">
                <select class="form-select" name="category_id" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <?php foreach($categories as $category) :?>
                        <option value="<?php echo $category->Id; ?>"><?php echo $category->name;?></option>
                    <?php endforeach; ?>
                </select>
            </div>
              
             <div class="form-outline mb-4">
                <input type="file" name="image" id="form2Example1" class="form-control" placeholder="image" />
            </div>


              <!-- Submit button -->
              <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

          
            </form>

<?php require "../includes/footer.php" ?>