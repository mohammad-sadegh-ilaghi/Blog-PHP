<template>
    <Header title="List of categories"  />
    <div class="row ">
        <a class="btn btn-primary" href="create.php">create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">delete</th>
                <th scope="col">update</th>

            </tr>
        </thead>
        <tbody>
            <!-- <php foreach($categories as $category) : ?> -->
            <tr>
                <td>
                    <!-- <php echo $category['name']; ?></td> -->
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $category['Id'];?>" class="btn btn-outline-danger">delete</a>
                </td>
                <td>
                    <a href="update.php?id=<?php echo $category['Id'];?>" class="btn btn-outline-warning">update</a>
                </td>
            </tr>
            <!-- <php endforeach;?> -->
        </tbody>
    </table>
</template>


<!-- scripts -->
<script setup>
/**
 * imports
 */
 import Header from '@/Components/Header.vue'


</script>