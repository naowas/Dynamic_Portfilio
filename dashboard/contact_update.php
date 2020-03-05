<?php

$phone_head2 = $_POST['phone_head5'];
$phone2 = $_POST['phone8'];
$email_head2 = $_POST['email_head7'];
$email2 = $_POST['email4'];
$id2 = $_POST['btn-update70'];

require 'db.php';
$updateData = "UPDATE `contact` SET `phone_head`='$phone_head2',`phone`='$phone2',`email_head`='$email_head2',`email`='$email2' WHERE id='$id2'";
$updated = mysqli_query($db_connection, $updateData);
header('location:contact.php');
