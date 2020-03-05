<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];
$select_query = "SELECT * FROM top_header1 WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($db_return);

$home_url = $after_assoc['home_head'];
$home_url2 = $after_assoc['home'];
$about_url = $after_assoc['about_head'];
$about_url2 = $after_assoc['about'];
$services_url1 = $after_assoc['service_head'];
$services_url2= $after_assoc['service'];
$works_url1 = $after_assoc['works_head'];
$works_url2 = $after_assoc['works'];
$testimonials_url1 = $after_assoc['testimonial_head'];
$testimonials_url2 = $after_assoc['testimonial'];
$contact_url1 = $after_assoc['contact_head'];
$contact_url2 = $after_assoc['contact'];

?>

<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Edit Header</h2>
    </div>
    <form action="topheader_update.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-12 form-group">
        <label for="">Home Head</label>
          <input type="text" class="form-control" name="hh" value="<?php echo $home_url; ?>">
      </div>
         <div class="col-lg-12 form-group">
        <label for="">Home URL</label>
          <input type="text" class="form-control" name="hu" value="<?php echo $home_url2; ?>">
      </div> 

        
      <div class="col-lg-12 form-group">
        <label for="">About Head</label>
          <input type="text" class="form-control" name="ah" value="<?php echo $about_url; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">About URL</label>
          <input type="text" class="form-control" name="au" value="<?php echo $about_url2; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Services Head</label>
          <input type="text" class="form-control" name="sh" value="<?php echo $services_url1; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Services URL</label>
          <input type="text" class="form-control" name="su" value="<?php echo $services_url2; ?>">
      </div>
      
       <div class="col-lg-12 form-group">
        <label for="">works Head</label>
          <input type="text" class="form-control" name="wh" value="<?php echo $works_url1; ?>">
      </div>
       <div class="col-lg-12 form-group">
        <label for="">works_url</label>
          <input type="text" class="form-control" name="wu" value="<?php echo $works_url2; ?>">
      </div>
        
        
              
      <div class="col-lg-12 form-group">
        <label for="">Testimonials Head</label>
          <input type="text" class="form-control" name="th" value="<?php echo $testimonials_url1; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Testimonials URL</label>
          <input type="text" class="form-control" name="tu" value="<?php echo $testimonials_url2; ?>">
      </div>
          
      <div class="col-lg-12 form-group">
        <label for="">Contact Head</label>
          <input type="text" class="form-control" name="ch" value="<?php echo $contact_url1; ?>">
      </div>
                  
      <div class="col-lg-12 form-group">
        <label for="">Contact URL</label>
          <input type="text" class="form-control" name="cu" value="<?php echo $contact_url2; ?>">
      </div>
        
      <div class="col-lg-12 text-center">
        <button type="submit" value="<?php echo $after_assoc['id']; ?>" name="btn-update6" class="btn btn-success">Update info</button>
      </div>
    </div>
  </form>
</div>
<?php
  require_once 'footer.php';
?>
