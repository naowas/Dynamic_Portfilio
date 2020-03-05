<?php

session_start();

require 'db.php';

$about_title = $_POST['clients_title6'];
$uploaded_file = $_FILES['clients_img2'];

$after_explode = explode('.',$uploaded_file['name']);
$extention = end($after_explode);
$allowed_extention = array('jpg','jpeg','png','gif');
if(in_array($extention, $allowed_extention)){
  if($uploaded_file['size'] <= 20000000){

    $insert = "INSERT INTO clients (clients_title) VALUES ('$about_title')";
    $result = mysqli_query($db_connection, $insert);

    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extention;
    $new_location = 'uploads/clients/'.$file_name;
    move_uploaded_file($uploaded_file['tmp_name'], $new_location);
    $name_to_save_db = $file_name;
    $update = "UPDATE clients SET clients_image='$file_name' WHERE id=$last_id";
    $photo_uploaded = mysqli_query($db_connection,$update);
    header('location:clients.php');
  }
  else{
    echo "file is too large";
  }
}
else{
  echo "Invalid File Format";
}

?>
