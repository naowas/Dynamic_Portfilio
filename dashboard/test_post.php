<?php

session_start();

require 'db.php';

$test_title = $_POST['test_title'];
$choose_3 = $_POST['choose_1'];
$choose_4 = $_POST['choose_2'];
$uploaded_file = $_FILES['test_img2'];

$after_explode = explode('.',$uploaded_file['name']);
$extention = end($after_explode);
$allowed_extention = array('jpg','jpeg','png','gif');
if(in_array($extention, $allowed_extention)){
  if($uploaded_file['size'] <= 20000000){

    $insert = "INSERT INTO test (parag1,parag2,parag3) VALUES ('$test_title','$choose_3', '$choose_4')";
    $result = mysqli_query($db_connection, $insert);

    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extention;
    $new_location = 'uploads/test/'.$file_name;
    move_uploaded_file($uploaded_file['tmp_name'], $new_location);
    $name_to_save_db = $file_name;
    $update = "UPDATE test SET test_image='$file_name' WHERE id=$last_id";
    $photo_uploaded = mysqli_query($db_connection,$update);
    header('location:test.php');
  }
  else{
    echo "file is too large";
  }
}
else{
  echo "Invalid File Format";
}

?>
