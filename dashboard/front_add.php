<?php
require_once 'header.php';
 ?>

<div class="col-lg-12">
  <div class="col-lg-12">
    <h2>Add Font</h2>
  </div>
  <form action="front_post.php" method = "post" enctype="multipart/form-data">
      
       <div class="col-lg-12">
      <label for="">Header Option 1</label>
      <input type="text" name="choose_1" class="form-control">
      <br>
    </div>
      
     
      <div class="col-lg-12">
      <label for="">Header Option 2</label>
      <textarea name="choose_2" class="form-control"></textarea>
      <br> 
    </div>
      
      <div class="col-lg-12">
      <label for="">Header Option 3</label>
      <textarea name="choose_3" class="form-control"></textarea>
      <br> 
    </div>
      <div class="col-lg-12">
      <label for="">Add Font Image</label>
      <input type="file" name="font_img2" class="form-control">
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
