<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];
$select_query = "SELECT * FROM socal WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($db_return);

$media1 = $after_assoc['facebook'];
$media2 = $after_assoc['twitter'];
$media3= $after_assoc['youtube'];
$media4 = $after_assoc['google_plus'];
$media5 = $after_assoc['instragram'];
?>
<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Edit Social Media</h2>
    </div>
    <form action="social_update.php" method="post" enctype="multipart/form-data">
    <div class="row">

      <div class="col-lg-12 form-group">
        <label for="">Facebook</label>
          <input type="text" class="form-control" name="fb_id" value="<?php echo $media1; ?>">
      </div>

      <div class="col-lg-12 form-group">
        <label for="">Twitter</label>
          <input type="text" class="form-control" name="tw_id" value="<?php echo $media2; ?>">
      </div>

      <div class="col-lg-12 form-group">
        <label for="">Instagram </label>
          <input type="text" class="form-control" name="insta_id" value="<?php echo $media3; ?>">
      </div>



      <div class="col-lg-12 form-group">
        <label for="">Youtube</label>
          <input type="text" class="form-control" name="yt_id" value="<?php echo $media4; ?>">
      </div>
      
      
      <div class="col-lg-12 form-group">
        <label for="">Google-Plus</label>
          <input type="text" class="form-control" name="gl_id" value="<?php echo $media5; ?>">
      </div>

      <div class="col-lg-12 text-center">
        <button type="submit" value="<?php echo $after_assoc['id']; ?>" name="btn-update70" class="btn btn-success">Update info</button>
      </div>
    </div>
  </form>
</div>
<?php
  require_once 'footer.php';
?>
