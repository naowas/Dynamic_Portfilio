<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';

$about_id = $_GET['id'];
$select_query = "SELECT * FROM about WHERE id=$about_id";
$db_return = mysqli_query($db_connection,$select_query);

$after_assoc = mysqli_fetch_assoc($db_return);

$about_head = $after_assoc['header'];
$about_p1 = $after_assoc['para1'];
$about_p2 = $after_assoc['para2'];
$about_icon = $after_assoc['about_img'];


?>

<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Edit test</h2>
    </div>
    <form action="about_update.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-lg-12 form-group">
        <label for="">Header</label>
          <input type="text" class="form-control" name="about_header" value="<?php echo $about_head; ?>">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Para 1</label>
          <input type="text" class="form-control" name="about_pg1" value="<?php echo $about_p1; ?>">
      </div>
      
      <div class="col-lg-12 form-group">
        <label for="">Para 2</label>
          <input type="text" class="form-control" name="about_pg2" value="<?php echo $about_p2; ?>">
      </div>

      <div class="col-lg-12 form-group">
        <label for="">Photo</label>
          <input type="file" name="about_photo">
          <br>
          <br>
          <img src="uploads/about/<?php echo $about_icon; ?>" alt="">
      </div>
      <div class="col-lg-12 text-center">
        <button type="submit" value="<?php echo $after_assoc['id']; ?>" name="btn-update2" class="btn btn-success">Update info</button>
      </div>
    </div>
  </form>
</div>
<?php
  require_once 'footer.php';
?>
