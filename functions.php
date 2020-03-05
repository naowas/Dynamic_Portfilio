<?php include 'dashboard/db.php' ?>

<?php
$select_logo = "SELECT * FROM logo WHERE status=1";
$logo_result = mysqli_query($db_connection,$select_logo);
$after_assoc = mysqli_fetch_assoc($logo_result);
 ?>
 
 <?php
$select1 = "SELECT * FROM  contact";
$result1 = mysqli_query($db_connection, $select1);
 ?>


<?php
$select3 = "SELECT * FROM  top_header1";
$result3 = mysqli_query($db_connection, $select3);
 ?>
 
<?php
$select4 = "SELECT * FROM  copyright";
$result4 = mysqli_query($db_connection, $select4);
 ?>
  
<?php
$select5 = "SELECT * FROM  counter";
$result5 = mysqli_query($db_connection, $select5);
 ?> 
   
<?php
$select6 = "SELECT * FROM  service";
$result6 = mysqli_query($db_connection, $select6);
 ?>  

 
   <?php
$select7 = "SELECT * FROM  about";
$result7 = mysqli_query($db_connection, $select7);
 ?> 
 
   <?php
$select8 = "SELECT * FROM  socal";
$result8 = mysqli_query($db_connection, $select8);
 ?>
 
   <?php
$select9 = "SELECT * FROM  clients";
$result9 = mysqli_query($db_connection, $select9);
 ?>
      <?php
$select99 = "SELECT * FROM  clients";
$result99 = mysqli_query($db_connection, $select99);
 ?>

   <?php
$select10 = "SELECT * FROM  font_pic";
$result10 = mysqli_query($db_connection, $select10);
 ?>
 


  <?php
$select11 = "SELECT * FROM  test";
$result11 = mysqli_query($db_connection, $select11);
 ?>