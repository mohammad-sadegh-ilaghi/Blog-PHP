<template>
    <div class="row">
  <a href="create.php" class="btn btn-primary">create</a>
</div>
<table class="table">
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
</template>

<!-- scripts -->
<script setup>


</script>