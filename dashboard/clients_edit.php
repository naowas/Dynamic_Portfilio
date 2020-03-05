<?php
require_once 'header.php';
 ?>

<?php
//require 'session_check.php';
require 'db.php';

$clients_id = $_GET['id'];
$select_query = "SELECT * FROM clients WHERE id=$clients_id";
$db_return = mysqli_query($db_connection,$select_query);

$after_assoc = mysqli_fetch_assoc($db_return);

$clients_head = $after_assoc['clients_title'];

$clients_icon = $after_assoc['clients_image'];


?>

<div class="col-lg-8 m-auto">
    <div class="text-center py-3">
      <h2>Edit Clients</h2>
    </div>
    <form action="clients_update.php" method="post" enctype="multipart/form-data">
    <div class="row">
     
      <div class="col-lg-12 form-group">
        <label for="">Clients Header</label>
          <input type="text" class="form-control" name="clients_header" value="<?php echo $clients_head; ?>">
        </div>

      <div class="col-lg-12 form-group">
        <label for="">Photo</label>
          <input type="file" name="clients_photo">
          <br>
          <br>
          <img src="uploads/clients/<?php echo $clients_icon; ?>" alt="">
      </div>
      <div class="col-lg-12 text-center">
        <button type="submit" value="<?php echo $after_assoc['id']; ?>" name="btn-update22" class="btn btn-success">Update info</button>
      </div>
    </div>
  </form>
</div>
<?php
  require_once 'footer.php';
?>
