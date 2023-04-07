<template>
    <div class="container px-4 px-lg-5">

        <form method="POST" action="" enctype="multipart/form-data">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" name="title" id="form2Example1" class="form-control" value="<?php echo $post->title; ?>"
                    placeholder="title" />

            </div>

            <div class="form-outline mb-4">
                <input type="text" name="subtitle" id="form2Example1" class="form-control" placeholder="subtitle"
                    value="<?php echo $post->subtitle; ?>" />
            </div>

            <div class="form-outline mb-4">
                <textarea type="text" name="body" id="form2Example1" class="form-control" placeholder="body"
                    rows="8">
                    <!-- <?php echo $post->body; ?> -->
                </textarea>
            </div>
            <div class="form-outline mb-4">
                <select class="form-select" name="category_id" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <!-- <?php foreach($categories as $category) :?> -->
                    <option value="<?php echo $category->Id; ?>">
                        <!-- <?php echo $category->name;?> -->
                    </option>
                    <!-- <?php endforeach; ?> -->
                </select>
            </div>
            <div class="form-outline mb-4">
                <input type="file" name="image" id="form2Example1" class="form-control" placeholder="image" />
            </div>
            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">update</button>
        </form>
    </div>
</template>


<!-- Scripts -->
<script setup></script>