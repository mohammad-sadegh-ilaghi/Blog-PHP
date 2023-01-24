<?php require "../includes/header.php"?>
<?php require "../config/config.php" ?>
<?php 
if(isset($_SESSION["username"])){
  die("{$_SESSION['username']} is logged in ");
}
  if(isset($_POST["submit"])){
    if($_POST['email'] == '' or $_POST['password'] == ''){
    echo "input must be compeleted";
    }
    else{
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = $conn->prepare("SELECT * FROM User WHERE email = :email");
    $query->execute([
      ':email' => $email,
    ]);
    $row = $query->fetch(PDO::FETCH_ASSOC);
    if($query->rowCount() > 0){
      if(password_verify($password, $row["password"])){
        $_SESSION["username"] = $row['username'];
        $_SESSION["user_id"] = $row['Id'];
        header("location: http://localhost/Blog/index.php");
      }
    }
    }
  }
?>
               
               <form method="POST" action="login.php">
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" />
                   
                  </div>

                  
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" />
                    
                  </div>



                  <!-- Submit button -->
                  <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Login</button>

                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>a new member? Create an acount<a href="register.php"> Register</a></p>
                    

                   
                  </div>
                </form>

           
<?php require "../includes/footer.php"?>