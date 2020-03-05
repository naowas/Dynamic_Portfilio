 <?php
require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$select_query = "SELECT COUNT(*) as login_data FROM user_info WHERE email='$email' and password='$password'";

$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);

if($after_assoc['login_data']==1){
  $_SESSION['kuddus']= 'ache';

    $_SESSION['name']= $after_assoc['username'];
    $_SESSION['email']= $after_assoc['email']; 




    setcookie('abul','jorina');


  header('location:dashboard.php');
}
else {
  echo "invalid email or password";
}

 ?>
