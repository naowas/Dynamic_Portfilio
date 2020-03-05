<?php
require 'session_check.php';
require 'db.php';
$user_id = $_POST['btn-update2'];
$edt_head = $_POST['test_header'];
$edt_p1 = $_POST['test_pg1'];
$edt_p2 = $_POST['test_pg2'];


if($_FILES['test_photo']['name'] != ''){
  $select_photo = "SELECT test_image FROM test WHERE id=$user_id"; //database
  $del_photo_query = mysqli_query($db_connection,$select_photo);
  $after_assoc = mysqli_fetch_assoc($del_photo_query);
  $delete_from_location = "uploads/test/".$after_assoc['test_image']; //database
  unlink($delete_from_location);


  $uploaded_file = $_FILES['test_photo']; //database thake
  $after_explode = explode('.',$uploaded_file['name']);
  $extention = end($after_explode);
  $allowed_extention = array('jpg','jpeg','png','gif');
  if(in_array($extention, $allowed_extention)){
    if($uploaded_file['size'] <= 2000000000){
      $file_name = $user_id.'.'.$extention;
      $new_location = 'uploads/test/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'], $new_location);
      $name_to_save_db = $file_name;
      $update = "UPDATE test SET test_image='$file_name' WHERE id=$user_id";
      $photo_uploaded = mysqli_query($db_connection,$update);

      $update_query = "UPDATE test SET parag1='$edt_head', parag2='$edt_p1', parag3='$edt_p2' WHERE id=$user_id";
      $result = mysqli_query($db_connection, $update_query);
      header('location:test.php');
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
   $update_query = "UPDATE test SET parag1='$edt_head', parag2='$edt_p1', parag3='$edt_p2' WHERE id=$user_id";
      $result = mysqli_query($db_connection, $update_query);
      header('location:test.php');
}






?>
