<?php
require 'session_check.php';
require 'db.php';
$user_id = $_POST['btn-update2'];
$edt_head = $_POST['about_header'];
$edt_p1 = $_POST['about_pg1'];
$edt_p2 = $_POST['about_pg2'];


if($_FILES['about_photo']['name'] != ''){
  $select_photo = "SELECT about_img FROM about WHERE id=$user_id";
  $del_photo_query = mysqli_query($db_connection,$select_photo);
  $after_assoc = mysqli_fetch_assoc($del_photo_query);
  $delete_from_location = "uploads/about/".$after_assoc['about_img'];
  unlink($delete_from_location);


  $uploaded_file = $_FILES['about_photo'];
  $after_explode = explode('.',$uploaded_file['name']);
  $extention = end($after_explode);
  $allowed_extention = array('jpg','jpeg','png','gif');
  if(in_array($extention, $allowed_extention)){
    if($uploaded_file['size'] <= 2000000000){
      $file_name = $user_id.'.'.$extention;
      $new_location = 'uploads/about/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'], $new_location);
      $name_to_save_db = $file_name;
      $update = "UPDATE about SET about_img='$file_name' WHERE id=$user_id";
      $photo_uploaded = mysqli_query($db_connection,$update);

      $update_query = "UPDATE about SET header='$edt_head', para1='$edt_p1', para2='$edt_p2' WHERE id=$user_id";
      $result = mysqli_query($db_connection, $update_query);
      header('location:about.php');
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
  $update_query = "UPDATE about SET header='$edt_head', para1='$edt_p1', para2='$edt_p2' WHERE id=$user_id";
  $result = mysqli_query($db_connection, $update_query);
  header('location:about.php');
}






?>
