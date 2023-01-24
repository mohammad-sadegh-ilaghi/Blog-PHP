<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>
<?php
$query = $conn->query("SELECT * FROM post");
$query->execute();
$posts = $query->fetchAll(PDO::FETCH_OBJ);
?>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <?php foreach($posts as $post) : ?>
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="posts/post.php?id=<?php echo $post->Id;?>">
                            <h2 class="post-title"><?php echo $post->title;?></h2>
                            <h3 class="post-subtitle"><?php echo $post->subtitle;?></h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!"><?php

                            $query = $conn->query("SELECT username FROM User WHERE Id = {$post->user_id}");
                            $query->execute();
                            $result = $query->fetchColumn();
                             echo $result; ?></a>
                            <?php
                            $date_created = new DateTime($post->created_at);
                            echo $date_created->format("Y-m-d");?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                  <?php endforeach; ?>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    
                </div>
            </div>
<?php require "includes/footer.php"; ?>