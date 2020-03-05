<?php
require_once 'header.php';
 ?>

<div class="col-lg-12">
  <div class="col-lg-12">
    <h2>Add Clients</h2>
  </div>
  <form action="clients_post.php" method = "post" enctype="multipart/form-data">
      
       <div class="col-lg-12">
      <label for="">Add New Clients</label>
      <input type="text" name="clients_title6" class="form-control">
      <br>
    </div>
      <div class="col-lg-12">
      <label for="">Add New Image</label>
      <input type="file" name="clients_img2" class="form-control">
      <br>
    </div>

    <div class="col-lg-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

 <?php
 require_once 'footer.php';
  ?>
