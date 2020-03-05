<?php
require 'db.php';
$user_id = $_GET['id'];

$select_photo = "SELECT logo FROM logo WHERE id=$user_id";

$del_photo_query = mysqli_query($db_connection,$select_photo);
$after_assoc = mysqli_fetch_assoc($del_photo_query);

$delete_from_location = "uploads/logo/".$after_assoc['logo'];
unlink($delete_from_location);

$del_query = "DELETE FROM logo WHERE id=$user_id";
$result = mysqli_query($db_connection , $del_query);
header('location:logo_view.php');

?>
