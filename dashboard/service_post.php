<?php
require 'db.php';

$service_head = $_POST['service_head'];
$design_head = $_POST['design_head'];
$design = $_POST['design'];
$development_head = $_POST['development_head'];
$development = $_POST['development'];
$graphics_head = $_POST['graphics_head'];
$graphics = $_POST['graphics'];
$branding_head = $_POST['branding_head'];
$branding = $_POST['branding'];
$photography_head = $_POST['photography_head'];
$photography = $_POST['photography'];
$support_head = $_POST['support_head'];
$support = $_POST['support'];


    $insert = "INSERT INTO service (services_head,design_head,design,development_head,development,graphics_head,graphics,branding_head,branding,photography_head,photography,support_head,support) VALUES ('$service_head', '$design_head','$design ','$development_head ','$development ','$graphics_head ','$graphics ','$branding_head ','$branding','$photography_head ','$photography ','$support_head ','$support')";

    $result = mysqli_query($db_connection, $insert);

   header('location:service.php');


?>
	
