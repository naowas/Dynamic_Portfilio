<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/31/2019
 * Time: 12:56 AM
 */
$font1 = $_POST['count1'];
$font2 = $_POST['count2'];
$font3 = $_POST['count3'];
$font4 = $_POST['count4'];
$font5 = $_POST['count5'];
$font6 = $_POST['count6'];
$font7 = $_POST['count7'];
$font8 = $_POST['count8'];
$id = $_POST['btn-update56'];

require 'db.php';
$updateData = "UPDATE counter SET `happy`='$font1',`happy_counter`='$font2',`project`='$font3',`project_counter`='$font4',`coffee`='$font5',`coffee_counter`='$font6',`total`='$font7',`total_counter`='$font8' WHERE id= $id";
$updated = mysqli_query($db_connection, $updateData);
header('location:counter.php');