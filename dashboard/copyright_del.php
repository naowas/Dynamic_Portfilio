<?php
require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];

$select_photo = "SELECT photo FROM copyright WHERE id=$user_id";
$del_query = "DELETE FROM copyright WHERE id=$user_id";
$result = mysqli_query($db_connection, $del_query);
header('location:copyrights.php');

?>