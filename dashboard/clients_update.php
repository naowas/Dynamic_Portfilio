<?php
require 'session_check.php';
require 'db.php';
$user_id = $_POST['btn-update22'];
$edt_head = $_POST['clients_header'];



if($_FILES['clients_photo']['name'] != ''){
  $select_photo = "SELECT clients_image FROM clients WHERE id=$user_id";
  $del_photo_query = mysqli_query($db_connection,$select_photo);
  $after_assoc = mysqli_fetch_assoc($del_photo_query);
  $delete_from_location = "uploads/clients/".$after_assoc['clients_image'];
  unlink($delete_from_location);


  $uploaded_file = $_FILES['clients_photo'];
  $after_explode = explode('.',$uploaded_file['name']);
  $extention = end($after_explode);
  $allowed_extention = array('jpg','jpeg','png','gif');
  if(in_array($extention, $allowed_extention)){
    if($uploaded_file['size'] <= 2000000000){
      $file_name = $user_id.'.'.$extention;
      $new_location = 'uploads/clients/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'], $new_location);
      $name_to_save_db = $file_name;
      $update = "UPDATE clients SET clients_image='$file_name' WHERE id=$user_id";
      $photo_uploaded = mysqli_query($db_connection,$update);

      $update_query = "UPDATE clients SET clients_title='$edt_head' WHERE id=$user_id";
      $result = mysqli_query($db_connection, $update_query);
      header('location:clients.php');
    }
    else{
      echo "file is too large";
    }
  }
  else{
    echo "Invalid File Format";
  }
}

else{
  $update_query = "UPDATE clients SET clients_title='$edt_head' WHERE id=$user_id";
  $result = mysqli_query($db_connection, $update_query);
  header('location:clients.php');
}






?>
