<?php
require_once 'header.php';
 ?>

<div class="col-lg-10">
  <div class="col-lg-10">
    <h2>Add Contact</h2>
  </div>
  <form action="contact_post.php" method="post" enctype="multipart/form-data">

       <div class="col-lg-10">
      <label for="">Phone head</label>
      <textarea name="phone_head" class="form-control"></textarea>
      <br> 
    </div>

      <div class="col-lg-10">
      <label for="">Phone</label>
      <textarea name="phone" class="form-control"></textarea>
      <br>
    </div>

       <div class="col-lg-10">
      <label for="">Email head</label>
      <textarea name="email_head" class="form-control"></textarea>
      <br>
    </div>

       <div class="col-lg-10">
      <label for="">Email</label>
      <textarea name="email" class="form-control"></textarea>
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
