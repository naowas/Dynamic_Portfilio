<?php
require 'db.php';

$plain_text2 = $_POST['plain_text'];
$foreground2 = $_POST['foreground'];
$background2 = $_POST['background'];

    $insert = "INSERT INTO copyright (copy_right,url_front,url) VALUES ('$plain_text2', '$foreground2','$background2')";
    $result = mysqli_query($db_connection, $insert);
   header('location:copyrights.php');
?>