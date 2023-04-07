<template>
    <form method="POST" action="" enctype="multipart/form-data">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="text" name="name" value="<?php echo $category->name;?>" class="form-control"
                placeholder="category name" />
        </div>

        <!-- Submit button -->
        <button type="submit" name="submit" class="btn btn-warning  mb-4 text-center">update</button>


    </form>
</template>


<!-- scripts -->
<script setup>

</script>