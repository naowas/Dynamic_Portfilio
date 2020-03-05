<?php
require 'db.php';
$fb = $_POST['fb_link'];
$tw = $_POST['tw_link'];
$insta = $_POST['insta_link'];
$youtube = $_POST['yt_link'];
$google = $_POST['google_link'];

    $insert = "INSERT INTO socal (facebook,twitter,youtube,google_plus,instragram) VALUES ('$fb ','$tw ','$youtube ','$google','$insta')";

    $result = mysqli_query($db_connection, $insert);

   header('location:social.php');


?>
