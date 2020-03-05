<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/31/2019
 * Time: 12:56 AM
 */


$service1 = $_POST['list1'];
$service2 = $_POST['list2'];
$service3 = $_POST['list3'];
$service4 = $_POST['list4'];
$service5 = $_POST['list5'];
$service6 = $_POST['list6'];
$service7 = $_POST['list7'];
$service8 = $_POST['list8'];

$service9 = $_POST['list9'];
$service10 = $_POST['list10'];
$service11 = $_POST['list11'];
$service12 = $_POST['list12'];
$service13 = $_POST['list13'];

$id = $_POST['btn-update70'];

require 'db.php';
$updateData = "UPDATE `service` SET `services_head`='$service1',`design_head`='$service2',`design`='$service3',`development_head`='$service4',`development`='$service5',`graphics_head`='$service6',`graphics`='$service7',`branding_head`='$service8',`branding`='$service9',`photography_head`='$service10',`photography`='$service11',`support_head`='$service12',`support`='$service13' WHERE id='$id'";


$updated = mysqli_query($db_connection, $updateData);
header('location:service.php');