 <?php
session_start();
if(!isset($_SESSION['kuddus'])){
  header("location:index.php");
}
 ?>
