<?php
require_once 'header.php';
 ?>

<div class="col-lg-10">
  <div class="col-lg-10">
    <h2>Add Social</h2>
  </div>
  <form action="social_post.php" method="post" enctype="multipart/form-data">
      <div class="col-lg-10">
      <label for="">Facebook</label>
      <input type="text" name="fb_link" class="form-control" placeholder="https://www.website.com/Username">
      <br>
    </div>
        <div class="col-lg-10">
      <label for="">Twitter</label>
      <input type="text" name="tw_link" class="form-control" placeholder="https://www.website.com/Username " >
      <br>
    </div>
    
     <div class="col-lg-10">
      <label for="">Instagram</label>
      <input type="text" name="insta_link" class="form-control" placeholder="https://www.website.com/Username ">
      <br>
    </div>
     <div class="col-lg-10">
      <label for="">Youtube</label>
      <input type="text" name="yt_link" class="form-control"placeholder="https://www.website.com/Username ">
      <br>
    </div>

     <div class="col-lg-10">
      <label for="">Google Plus</label>
      <input type="text" name="google_link" class="form-control"placeholder="https://www.website.com/Username ">
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
