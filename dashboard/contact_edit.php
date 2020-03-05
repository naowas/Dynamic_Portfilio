<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];
$select_query = "SELECT * FROM contact WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($db_return);

$phone_head = $after_assoc['phone_head'];
$phone = $after_assoc['phone'];
$email_head= $after_assoc['email_head'];
$email = $after_assoc['email'];
?>
<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Edit contact</h2>
    </div>
    <form action="contact_update.php" method="post" enctype="multipart/form-data">
    <div class="row">

      <div class="col-lg-12 form-group">
        <label for="">Phone Head</label>
          <input type="text" class="form-control" name="phone_head5" value="<?php echo $phone_head; ?>">
      </div>

      <div class="col-lg-12 form-group">
        <label for="">Phone</label>
          <input type="text" class="form-control" name="phone8" value="<?php echo $phone; ?>">
      </div>

      <div class="col-lg-12 form-group">
        <label for="">Email Head</label>
          <input type="text" class="form-control" name="email_head7" value="<?php echo $email_head; ?>">
      </div>



      <div class="col-lg-12 form-group">
        <label for="">Email</label>
          <input type="text" class="form-control" name="email4" value="<?php echo $email; ?>">
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
