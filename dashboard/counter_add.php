<?php
require_once 'header.php';
 ?>




<div class="col-lg-10">
  <div class="col-lg-10">
    <h2>Add Counter </h2>
  </div>
  <form action="counter_post.php" method="post" enctype="multipart/form-data">
      
       <div class="col-lg-10">
      <label for=""> Happy </label>
      <input type="text" name="field" class="form-control">
      <br>
    </div>
      
     <div class="col-lg-10">
      <label for="">Happy Counter</label>
      <textarea name="field1" class="form-control"></textarea>
      <br> 
    </div>
        <div class="col-lg-10">
      <label for="">Project</label>
      <textarea name="field2" class="form-control"></textarea>
      <br>     
    </div> 
       <div class="col-lg-10">
      <label for="">Project Counter</label>
      <input type="text" name="field3" class="form-control">
      <br>
    </div>
      
      
       <div class="col-lg-10">
      <label for="">Coffee</label>
      <input type="text" name="field4" class="form-control">
      <br>
    </div> <div class="col-lg-10">
      <label for="">Coffee Counter</label>
      <input type="text" name="field5" class="form-control">
      <br>
    </div> <div class="col-lg-10">
      <label for="">Total</label>
      <input type="text" name="field6" class="form-control">
      <br>
    </div> <div class="col-lg-10">
      <label for="">Total_Counter</label>
      <input type="text" name="field7" class="form-control">
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
