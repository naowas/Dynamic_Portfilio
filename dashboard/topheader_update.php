<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/31/2019
 * Time: 12:56 AM
 */
$home2 = $_POST['hh'];
$home3 = $_POST['hu'];
$about2 = $_POST['ah'];
$about3 = $_POST['au'];
$services2 = $_POST['sh'];
$services3 = $_POST['su'];

$works2 = $_POST['wh'];
$works3 = $_POST['wu'];
$testimonial2 = $_POST['th'];
$testimonial3 = $_POST['tu'];
$contact2 = $_POST['ch'];
$contact3 = $_POST['cu'];
$id = $_POST['btn-update6'];

require 'db.php';
$updateData = "UPDATE `top_header1` SET `home_head`='$home2',`home`='$home3',`about_head`='$about2',`about`='$about3',`service_head`='$services2',`service`='$services3',`works_head`='$works2 ',`works`='$works3',`testimonial_head`='$testimonial2',`testimonial`='$testimonial3',`contact_head`='$contact2',`contact`='$contact3' WHERE id='$id'";
$updated = mysqli_query($db_connection, $updateData);
header('location:top.php');