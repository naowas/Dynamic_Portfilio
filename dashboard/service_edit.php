<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];
$select_query = "SELECT * FROM service WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($db_return);

$head1 = $after_assoc['services_head'];
$head2 = $after_assoc['design_head'];
$head3 = $after_assoc['design'];
$head4 = $after_assoc['development_head'];
$head5 = $after_assoc['development'];
$head6= $after_assoc['graphics_head'];

$head7 = $after_assoc['graphics'];
$head8 = $after_assoc['branding_head'];
$head9 = $after_assoc['branding'];
$head10 = $after_assoc['photography_head'];

$head11 = $after_assoc['photography'];
$head12 = $after_assoc['support_head'];
$head13 = $after_assoc['support'];

?>

<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Edit Service</h2>
    </div>
    <form action="service_update.php" method="post" enctype="multipart/form-data">
    <div class="row">
        

        
      <div class="col-lg-12 form-group">
        <label for="">Servicet Head</label>
          <input type="text" class="form-control" name="list1" value="<?php echo $head1; ?>">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Design Head</label>
          <input type="text" class="form-control" name="list2" value="<?php echo $head2; ?>">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Design</label>
          <input type="text" class="form-control" name="list3" value="<?php echo $head3; ?>">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Development Head</label>
          <input type="text" class="form-control" name="list4" value="<?php echo $head4; ?>">
      </div>
      <div class="col-lg-12 form-group">
        <label for="">Development</label>
          <input type="text" class="form-control" name="list5" value="<?php echo $head5; ?>">
      </div>
        
      <div class="col-lg-12 form-group">
        <label for="">Graphics Head</label>
          <input type="text" class="form-control" name="list6" value="<?php echo $head6; ?>">
      </div>
          
      
          
      <div class="col-lg-12 form-group">
        <label for="">Graphics</label>
          <input type="text" class="form-control" name="list7" value="<?php echo $head7; ?>">
      </div>
         <div class="col-lg-12 form-group">
        <label for="">Branding Head</label>
          <input type="text" class="form-control" name="list8" value="<?php echo $head8; ?>">
      </div>
        
         <div class="col-lg-12 form-group">
        <label for="">Branding</label>
          <input type="text" class="form-control" name="list9" value="<?php echo $head9; ?>">
      </div>
        
         <div class="col-lg-12 form-group">
        <label for="">Photography Head</label>
          <input type="text" class="form-control" name="list10" value="<?php echo $head10; ?>">
      </div>
        
         <div class="col-lg-12 form-group">
        <label for="">Photography</label>
          <input type="text" class="form-control" name="list11" value="<?php echo $head11; ?>">
      </div>
        
         <div class="col-lg-12 form-group">
        <label for="">Support Head</label>
          <input type="text" class="form-control" name="list12" value="<?php echo $head12; ?>">
      </div>
        <div class="col-lg-12 form-group">
        <label for="">Support</label>
          <input type="text" class="form-control" name="list13" value="<?php echo $head13; ?>">
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
