<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/31/2019
 * Time: 12:56 AM
 */
$copy_right4 = $_POST['copy_right2'];
$url_front4 = $_POST['url_front1'];
$url4 = $_POST['url3'];
$id = $_POST['btn-update56'];

require 'db.php';
$updateData = "UPDATE copyright SET `copy_right`='$copy_right4',`url_front`='$url_front4',`url`='$url4' WHERE id= $id";
$updated = mysqli_query($db_connection, $updateData);
header('location:copyrights.php');