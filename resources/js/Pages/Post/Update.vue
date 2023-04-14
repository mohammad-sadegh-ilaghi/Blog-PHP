<template>
    <Header title="edit post"></Header>
    <div class="container px-4 px-lg-5 mx-5 text-ceneter">

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
            <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">update</button>
        </form>
    </div>
</template>



<!-- scripts -->
<script>
import Editor from '@tinymce/tinymce-vue'
import Header from '@/Components/Header.vue'

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