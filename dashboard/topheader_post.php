<?php
require 'db.php';
$home_head1 = $_POST['home_head'];
$home2 = $_POST['home'];
$about_head3 = $_POST['about_head'];
$about4 = $_POST['about'];

$services_head5 = $_POST['services_head22'];
$services6 = $_POST['services22'];
$works_head7 = $_POST['works_head22'];
$works8 = $_POST['works']

$testimonial_head9 = $_POST['testimonial_head1']

$testimonial10 = $_POST['testimonial2'];
$contact_head11 = $_POST['contact_head'];
$contact12 = $_POST['contact'];

    $insert = "INSERT INTO top_header1 (home_head,home,about_head,about,service_head ,service ,works_head,works,testimonial_head ,testimonial,contact_head,contact) VALUES ('$home_head1','$home2', '$about_head3', '$about4', '$services_head5','$services6', '$works_head7', '$works8', '$testimonial_head9 ','$testimonial10','$contact_head11','$contact12')";

    $result = mysqli_query($db_connection, $insert);

   header('location:top.php');


?>
 