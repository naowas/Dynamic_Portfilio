<?php
require_once 'header.php';
?>

<?php
require 'db.php';

$select_logo = "SELECT * FROM logo";
$logo_result = mysqli_query($db_connection,$select_logo);

?>

<div class="col-lg-12">
<div class="col-lg-12">
  <h2>All LOGOS</h2>
  <a href="logo_add.php"><button type="button" class="btn btn-primary">Add Logo</button></a>
</div>
<div class="col-lg-12">
  <table class="table table-bordered">
    <tr>
      <td>ID</td>
      <td>LOGO</td>
      <td>STATUS</td>
      <td>Action</td>
    </tr>
    <?php
    foreach ($logo_result as $value) {
    ?>
    <tr>
      <td><?php echo $value['id']; ?></td>
      <td> <img src="uploads/logo/<?php echo $value['logo']; ?>" alt="" width="110" > </td>
      <td>
        <?php
        if($value['status']==1){
          echo "Active";
        }
        else{
          echo "Deactive";
        }
       ?>
     </td>
     <td>
       <a href="edit_logo.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-primary">Edit</button> </a>
      <a href="del_logo.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-danger">Delete</button> </a>
     </td>
    </tr>
    <?php   } ?>
  </table>
</div>
</div>

<?php
require_once 'footer.php';
?>


<?php
require_once 'footer.php';


?>
