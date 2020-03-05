<!-- <?php
//require_once 'header.php';
 ?>
<?php -->
//require 'session_check.php';
require 'db.php';

$user_id = $_GET['id'];
$select_query = "SELECT * FROM about WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);

$after_assoc = mysqli_fetch_assoc($db_return);

$logo = $after_assoc['logo'];
$stasus = $after_assoc['stasus'];
?>
<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Edit Logo</h2>
    </div>
    <form action="logo_update.php" method="post" enctype="multipart/form-data">
    <div class="row">
          <div class="col-lg-12 form-group">
        <label for="">Logo Head</label>
          <input type="text" class="form-control" name="logo" value="<?php echo $logo; ?>">
      </div>
         <div class="col-lg-12 form-group">
        <label for="">Paragraph</label>
          <input type="text" class="form-control" name="stasus" value="<?php echo $stasus; ?>">
      </div>
        <div class="col-lg-12 form-group">
        <label for="">Photo</label>
          <input type="file" name="image">
          <br>
          <br>
          <img src="uploads/logo/<?php echo $image; ?>" alt="">
      </div>

      <div class="col-lg-12 text-center">
        <button type="submit" class="btn btn-success">Update info</button>
      </div>
    </div>
  </form>
</div>
<?php
  //require_once 'footer.php';
?>
