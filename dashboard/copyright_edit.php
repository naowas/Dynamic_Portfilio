<?php
require_once 'header.php';
 ?>
<?php
//require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];
$select_query = "SELECT * FROM copyright WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($db_return);


$copy_right = $after_assoc['copy_right'];
$url_front = $after_assoc['url_front'];
$url = $after_assoc['url'];
?>
<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2> Copyright Edit</h2>
    </div>
    <form action="copyright_update.php" method="post" enctype="multipart/form-data">
    <div class="row">

      <div class="col-lg-12 form-group">
        <label for="">Copyright Head</label>
          <input type="text" class="form-control" name="copy_right2" value="<?php echo $copy_right; ?>">
      </div>

      <div class="col-lg-12 form-group">
        <label for="">URL Head</label>
          <input type="text" class="form-control" name="url_front1" value="<?php echo $url_front; ?>">
      </div>

      <div class="col-lg-12 form-group">
        <label for="">URL</label>
          <input type="text" class="form-control" name="url3" value="<?php echo $url; ?>">
      </div>

      <div class="col-lg-12 text-center">
         <button type="submit" value="<?php echo $after_assoc['id']; ?>" name="btn-update56" class="btn btn-success">Update info</button>
      </div>
    </div>
  </form>
</div>
<?php
  require_once 'footer.php';
?>
