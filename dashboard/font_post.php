<?php

session_start();

require 'db.php';

$choose_10 = $_POST['choose_1'];
$choose_11 = $_POST['choose_2'];
$choose_12 = $_POST['choose_3'];
$uploaded_file = $_FILES['font_img2'];

$after_explode = explode('.',$uploaded_file['name']);
$extention = end($after_explode);
$allowed_extention = array('jpg','jpeg','png','gif');
if(in_array($extention, $allowed_extention)){
  if($uploaded_file['size'] <= 20000000){

    $insert = "INSERT INTO font_pic (header1,header2,header3) VALUES ('$choose_10','$choose_11', '$choose_12')";
    $result = mysqli_query($db_connection, $insert);

    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extention;
    $new_location = 'uploads/font/'.$file_name;
    move_uploaded_file($uploaded_file['tmp_name'], $new_location);
    $name_to_save_db = $file_name;
    $update = "UPDATE font_pic SET font_image='$file_name' WHERE id=$last_id";
    $photo_uploaded = mysqli_query($db_connection,$update);
    header('location:font.php');
  }
  else{
    echo "file is too large";
  }
}
else{
  echo "Invalid File Format";
}

?>
