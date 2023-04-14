<template>
  <Header title="list of posts"></Header>
  <div class="container ">
    <div class="row mx-4 justify-content-center ">
      <a href="create.php" class=" col-6 mb-5 btn btn-primary">create</a>
    </div>
  </div>
  <div class="container mx-4">

    <table class="table ">
      <thead>
        <tr>
          <th scope="col">title</th>
          <th scope="col">created</th>
          <th scope="col">delete</th>
          <th scope="col">update</th>
        </tr>
      </thead>
      <tbody>
        <!-- <?php foreach($posts as $post): ?> -->
        <tr>
          <td>
            <!-- <?php echo $post['title']; ?> -->
          </td>
          <td>
            <!-- <?php echo $post['created_at']; ?> -->
          </td>
          <td><a href="delete.php?id=<?php echo $post['Id'];?>" class="btn btn-outline-danger">delete</a></td>
          <td><a href="update.php?id=<?php echo $post['Id'];?>" class="btn btn-outline-warning">update</a></td>
        </tr>
        <!-- <?php endforeach;?> -->
      </tbody>
    </table>
  </div>
</template>

<!-- scripts -->
<script setup>
/**
 * imports
 */
import Header from '@/Components/Header.vue'



</script>