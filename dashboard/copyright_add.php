<?php
require_once 'header.php';
 ?>
<div class="col-lg-10">
  <div class="col-lg-10">
    <h2>Add Copy </h2>
  </div>
  
  <form action="copyright_post.php" method="post" enctype="multipart/form-data">
      
       <div class="col-lg-10">
      <label for=""> Plain Text</label>
      <input type="text" name="plain_text" class="form-control">
      <br>
    </div>
     <div class="col-lg-10">
      <label for="">Url foreground</label>
      <textarea name="foreground" class="form-control"></textarea>
      <br> 
    </div>
    <div class="col-lg-10">
      <label for="">URL</label>
      <textarea name="background" class="form-control"></textarea>
      <br>      
    </div> 
    <div class="col-lg-5">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
 <?php
 require_once 'footer.php';
  ?>
