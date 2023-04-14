
<template>
    <Header title="create post"></Header>
    <!-- <form method="POST" action="" enctype="multipart/form-data"> -->
    <form class="container mx-4 text-ceneter">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="text" name="title" id="form2Example1" class="form-control" placeholder="title" />

        </div>

        <div class="form-outline mb-4">
            <input type="text" name="subtitle" id="form2Example1" class="form-control" placeholder="subtitle" />
        </div>

        <div class="form-outline mb-4">
            <editor api-key="no-api-key" />
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

        <div class="form-outline mb-4">
            <input type="text" name="tags" id="form2Example1" class="form-control" placeholder="tags" />
        </div>

        <!-- Submit button -->
        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>


    </form>
    <Editor api-key="API_KEY" :init="{ plugins: 'wordcount' }" />
</template>

<!-- scripts -->
<script>
import Header from '@/Components/Header.vue'

import Editor from '@tinymce/tinymce-vue'

export default {
    props: ["inputvalue", "inputname"],
    name: 'app',
    components: {
        'editor': Editor,
        'Header': Header
    },
    data() {
        return {
            content: this.inputvalue
        }
    }
}
</script>