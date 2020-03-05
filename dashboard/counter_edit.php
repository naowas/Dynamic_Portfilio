<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];
$select_query = "SELECT * FROM counter WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($db_return);

$field1 = $after_assoc['happy'];
$field2 = $after_assoc['happy_counter'];
$field3 = $after_assoc['project'];
$field4 = $after_assoc['project_counter'];

$field5 = $after_assoc['coffee'];
$field6 = $after_assoc['coffee_counter'];
$field7 = $after_assoc['total'];
$field8 = $after_assoc['total_counter'];


?>
<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2> Counter Edit</h2>
    </div>
    <form action="counter_update.php" method="post" enctype="multipart/form-data">
    <div class="row">
        
      <div class="col-lg-12 form-group">
        <label for="">Happy</label>
          <input type="text" class="form-control" name="count1" value="<?php echo $field1; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Happy Counter</label>
          <input type="text" class="form-control" name="count2" value="<?php echo $field2; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Project</label>
          <input type="text" class="form-control" name="count3" value="<?php echo $field3; ?>">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Project Counter</label>
          <input type="text" class="form-control" name="count4" value="<?php echo $field4; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Coffee</label>
          <input type="text" class="form-control" name="count5" value="<?php echo $field5; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Coffee Counter</label>
          <input type="text" class="form-control" name="count6" value="<?php echo $field6; ?>">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Total</label>
          <input type="text" class="form-control" name="count7" value="<?php echo $field7; ?>">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Total_Counter</label>
          <input type="text" class="form-control" name="count8" value="<?php echo $field8; ?>">
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
