<?php
//require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];

$select_photo = "SELECT photo FROM about WHERE id=$user_id";

$del_photo_query = mysqli_query($db_connection,$select_photo);
$after_assoc = mysqli_fetch_assoc($del_photo_query);

$delete_from_location = "uploads/about/".$after_assoc['photo'];
unlink($delete_from_location);


$del_query = "DELETE FROM about WHERE id=$user_id";
$result = mysqli_query($db_connection , $del_query);
header('location:about.php');

?>
