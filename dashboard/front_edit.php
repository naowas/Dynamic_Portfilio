<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';

$about_id = $_GET['id'];
$select_query = "SELECT * FROM font_pic WHERE id=$about_id";
$db_return = mysqli_query($db_connection,$select_query);

$after_assoc = mysqli_fetch_assoc($db_return);

$head1 = $after_assoc['header1'];
$head2 = $after_assoc['header2'];
$head3 = $after_assoc['header3'];
$font_icon = $after_assoc['font_image'];


?>

<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Edit Font</h2>
    </div>
    <form action="front_update.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-lg-12 form-group">
        <label for="">Para 1</label>
          <input type="text" class="form-control" name="header_one" value="<?php echo $head1; ?>">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Para 2</label>
          <input type="text" class="form-control" name="header_two" value="<?php echo $head2; ?>">
      </div>
      
      <div class="col-lg-12 form-group">
        <label for="">Para 3</label>
          <input type="text" class="form-control" name="header_three" value="<?php echo $head3; ?>">
      </div>

      <div class="col-lg-12 form-group">
        <label for="">Photo</label>
          <input type="file" name="font_photo">
          <br>
          <br>
          <img src="uploads/font/<?php echo $font_icon; ?>" alt="">
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
