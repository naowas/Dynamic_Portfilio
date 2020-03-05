<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';

$about_id = $_GET['id'];
$select_query = "SELECT * FROM test WHERE id=$about_id";
$db_return = mysqli_query($db_connection,$select_query);

$after_assoc = mysqli_fetch_assoc($db_return);

$test_head = $after_assoc['parag1']; //database thake asche
$test_p1 = $after_assoc['parag2'];
$test_p2 = $after_assoc['parag3'];
$test_icon = $after_assoc['test_image'];


?>

<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Edit test</h2>
    </div>
    <form action="test_update.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-lg-12 form-group">
        <label for="">Header</label>
          <input type="text" class="form-control" name="test_header" value="<?php echo $test_head; ?>">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Para 1</label>
          <input type="text" class="form-control" name="test_pg1" value="<?php echo $test_p1; ?>">
      </div>
      
      <div class="col-lg-12 form-group">
        <label for="">Para 2</label>
          <input type="text" class="form-control" name="test_pg2" value="<?php echo $test_p2; ?>">
      </div>

      <div class="col-lg-12 form-group">
        <label for="">Photo</label>
          <input type="file" name="test_photo">
          <br>
          <br>
          <img src="uploads/test/<?php echo $test_icon; ?>" alt="">
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
