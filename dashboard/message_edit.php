<?php
//require 'session_check.php';
require 'db.php';

$user_id = $_GET['id'];
$select_query = "SELECT * FROM contact_message WHERE id=$user_id";
$db_return = mysqli_query($db_connection,$select_query);

$after_assoc = mysqli_fetch_assoc($db_return);

$name = $after_assoc['name'];
$email = $after_assoc['email'];
$message = $after_assoc['message'];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  </head>
  <body>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
          <div class="text-center py-3">
            <h2>Edit Message</h2>
          </div>
          
          <form action="update.php" method="post">
          
          
          <div class="row">
            <div class="col-lg-12 form-group">
              <label for="">Name</label>
                <input type="hidden" class="form-control" name="id" value="<?php echo $user_id; ?>">
                <input type="text" class="form-control" name="fname" value="<?php echo $name; ?>">
            </div>
            <div class="col-lg-12 form-group">
              <label for="">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="col-lg-12 form-group">
              <label for="">Message</label>
                <textarea name="message" class="form-control"><?php echo $message; ?></textarea>
            </div>
            <div class="col-lg-12 text-center">
              <button type="submit" class="btn btn-success">Update info</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
