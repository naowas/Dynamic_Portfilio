<?php
//session_start();
require 'db.php';

$name = $_POST['name'];
$email= $_POST['email'];   
$mesg = $_POST['message'];

$uploaded_file = $_FILES['photo'];
$after_explode = explode('.',$uploaded_file['name']);
$extention = end($after_explode);
$allowed_extention = array('jpg','jpeg','png','gif');
if(in_array($extention, $allowed_extention)){
  if($uploaded_file['size'] <= 2000000){
    $insert_query = "INSERT INTO contact_message(name,email,message) VALUES('$name','$email','$mesg')";
    $result = mysqli_query($db_connection,$insert_query);
    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extention;
    $new_location = 'uploads/'.$file_name;
    move_uploaded_file($uploaded_file['tmp_name'], $new_location);
    $name_to_save_db = $file_name;
    $update = "UPDATE contact_message SET photo='$file_name' WHERE id=$last_id";
    $photo_uploaded = mysqli_query($db_connection,$update);
      
    $_SESSION['success']='your Message sent successfully';
    
      
    header('location:../index.php');
  }
  else{
    echo "file is too large";
  }
}
else{
  echo "Invalid File Format";
}
?>
