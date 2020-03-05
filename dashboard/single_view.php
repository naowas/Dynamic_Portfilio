<?php

require_once 'header.php';
 ?>
<?php
require 'db.php';

$user_id = $_GET['id'];
$select_query = "SELECT * FROM contact_message WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);
  
$after_assoc = mysqli_fetch_assoc($db_return);

$name = $after_assoc['name'];
$email = $after_assoc['email'];
$message = $after_assoc['message'];
$photo = $after_assoc['photo'];

?>

<div class="col-lg-12 m-auto class= btn btn-info">
    <div class="text-center py-3 ">
      <h1> Individual Message</h1>
    </div>
    <div>
      <h3>
          <table class="table table-bordered">
          <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
          </tr>
          <tr>
            <td>Eamil</td>
            <td><?php echo $email; ?></td>
          </tr>
          <tr>
            <td>message</td>
            <td><?php echo $message;?></td>
          </tr> 
          <tr>
           <td>Photo</td>
           <td> <img src="uploads/<?php echo $photo;?>" alt="" width="150"> </td>
          </tr>
      </table>    
        </h3>

    </div>
</div>
<?php
require_once 'footer.php';
 ?>
