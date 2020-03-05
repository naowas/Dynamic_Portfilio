<?php
require 'db.php';
$phone_head = $_POST['phone_head'];
$phone = $_POST['phone'];
$email_head = $_POST['email_head'];
$email = $_POST['email'];

    $insert = "INSERT INTO contact (phone_head,phone,email_head,email) VALUES ('$phone_head ','$phone ','$email_head ','$email ')";

    $result = mysqli_query($db_connection, $insert);

   header('location:contact.php');


?>
