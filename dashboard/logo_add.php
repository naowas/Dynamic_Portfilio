<?php

require 'db.php';
require 'header.php';
?>
<div class="col-lg-12">
  <div class="col-lg-12">
    <h2>Add Logo</h2>
  </div>
  <form  action="logo_post.php" method="post" enctype="multipart/form-data">
    <div class="col-lg-12" style="margin-bottom:20px;">
      <input type="file" name="logo" class="form-control">
    </div>
    <div class="col-lg-12">
      <label for="">select status</label>
      <select name="status">
        <option value="1">Active</option>
        <option value="0">Deactive</option>
      </select>
    </div>
    <div class="col-lg-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<?php require 'footer.php'; ?>
