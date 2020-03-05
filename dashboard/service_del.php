<?php
require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];

$select_photo = "SELECT service FROM contact WHERE id=$user_id";

$del_query = "DELETE FROM service  WHERE id=$user_id";
$result = mysqli_query($db_connection , $del_query);
header('location:service.php');

?>
