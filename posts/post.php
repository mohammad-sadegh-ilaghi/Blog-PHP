<?php require "../includes/navbar.php" ?>
<?php require "../config/config.php" ?>
<?php 
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $query = $conn->query("SELECT * FROM post WHERE Id = {$id}");
    $query->execute();
    $post = $query->fetch(PDO::FETCH_OBJ);
}
else{
    die("not found post");
}
?>
        <header class="masthead" style="background-image: url('images/<?php echo $post->img; ?>')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?php echo $post->title; ?></h1>
                            <h2 class="subheading"><?php echo $post->subtitle; ?></h2>
                            <span class="meta">
                                Posted by
                                <a href="#!"><?php
                                $query_user = $conn->query("SELECT username FROM User WHERE Id = {$post->user_id}");
                                $query_user->execute();
                                $username = $query_user->fetch(PDO::FETCH_COLUMN);
                                echo $username;
                                ?></a>
                                on<?php 
                                $date_created = new DateTime($post->create_at);
                                echo $date_created->format('Y-m-d'); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p><?php echo $post -> body?></p>
                    </div>
                </div>
                <?php if(isset($_SESSION['username'])): ?>
                <div class="row">
                    <div class="col-3 offset-3">
                            <a href="update.php?id=<?php echo $post->Id; ?>" class="btn btn-warning text-center">Update
                            </a>
                    </div>
                </div>
                <?php endif;?>
            </div>
        </article>

<?php require "includes/footer.php" ?>