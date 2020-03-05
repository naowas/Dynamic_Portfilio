<?php
require_once 'header.php';
 ?>

<div class="col-lg-10">
  <div class="col-lg-10">
    <h2>Add Service</h2>
  </div>
  <form action="service_post.php" method="post" enctype="multipart/form-data">
      
       <div class="col-lg-10">
      <label for=""> Service Head</label>
      <input type="text" name="service_head" class="form-control">
      <br>
    </div>
      
     <div class="col-lg-10">
      <label for="">Design Head</label>
      <textarea name="design_head" class="form-control"></textarea>
      <br> 
    </div>
      
     <div class="col-lg-10">
      <label for="">Design</label>
      <textarea name="design" class="form-control"></textarea>
      <br> 
    </div>
      
       <div class="col-lg-10">
      <label for="">Development head</label>
      <textarea name="development_head" class="form-control"></textarea>
      <br> 
    </div>
      
      <div class="col-lg-10">
      <label for="">Development</label>
      <textarea name="development" class="form-control"></textarea>
      <br> 
    </div>
      
       <div class="col-lg-10">
      <label for="">Graphics Head</label>
      <textarea name="graphics_head" class="form-control"></textarea>
      <br> 
    </div>
      
       <div class="col-lg-10">
      <label for="">Graphics</label>
      <textarea name="graphics" class="form-control"></textarea>
      <br> 
    </div>
    <div class="col-lg-10">
      <label for="">Branding Head</label>
      <textarea name="branding_head" class="form-control"></textarea>
      <br> 
    </div>
    <div class="col-lg-10">
      <label for="">Branding</label>
      <textarea name="branding" class="form-control"></textarea>
      <br> 
    </div>
    <div class="col-lg-10">
      <label for="">Photography Head</label>
      <textarea name="photography_head" class="form-control"></textarea>
      <br> 
    </div>
    <div class="col-lg-10">
      <label for="">Photography</label>
      <textarea name="photography" class="form-control"></textarea>
      <br> 
    </div>
    <div class="col-lg-10">
      <label for="">Support Head</label>
      <textarea name="support_head" class="form-control"></textarea>
      <br> 
    </div>
    <div class="col-lg-10">
      <label for="">Support</label>
      <textarea name="support" class="form-control"></textarea>
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
