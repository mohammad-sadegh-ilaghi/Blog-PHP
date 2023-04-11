<template>
    <Header ></Header>
    <article class="container mx-4 mb-4 ">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>
                        <!-- <?php echo $post -> body?> -->
                    </p>
                </div>
            </div>
            <!-- <?php if(isset($_SESSION['username']) and $post->user_id == $_SESSION['user_id']): ?> -->
            <div class="row">
                <div class="col-3 offset-3">
                    <a href="update.php?id=<?php echo $post->Id; ?>" class="btn btn-warning text-center">Update
                    </a>
                </div>
            </div>
            <!-- <?php endif;?> -->
        </div>
    </article>
</template>

<!-- scripts -->
<script setup>
/**
 * imports
 */
 import Header from '@/Components/Header.vue'



</script>