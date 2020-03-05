<?php
require 'db.php';

$text1 = $_POST['field'];
$text2 = $_POST['field1'];
$text3 = $_POST['field2'];
$text4 = $_POST['field3'];
$text5 = $_POST['field4'];
$text6 = $_POST['field5'];
$text7 = $_POST['field6'];
$text8 = $_POST['field7'];



    $insert = "INSERT INTO counter (happy,happy_counter,project,project_counter,coffee,coffee_counter,total,total_counter) VALUES ('$text1', '$text2','$text3','$text4','$text5','$text6','$text7','$text8')";

    $result = mysqli_query($db_connection, $insert);

   header('location:counter.php');


?>