<html>

<?php
session_start();
if(isset($_POST['sasd']))
{
    extract($_POST);
    include 'connection.php';
  $email = $_POST['place'];
  
  $pass= $_POST['loc'];

  $user=$_POST['intime'];
  $ema = $_POST['uptime'];
  
  $pa= $_POST['child'];

  $us=$_POST['adult'];
  $usr=$_POST['ticket'];
   
  
  $sql="INSERT INTO addplace(name,location,intime,uptime,child,adult,ticket) VALUES ('$email','$pass','$user','$ema','$pa','$us','$usr')";
  if (mysqli_query($conn, $sql)) {
     include_once 'admin.html';
  } else {
     echo "Error: " . $sql . "
" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
}

?>


</html>