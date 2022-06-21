<html>

<?php
session_start();
if(isset($_POST['login']))
{
    extract($_POST);
    include 'connection.php';
  $email = $_POST['user'];
  
  $pass= $_POST['pass'];

  $user=$_POST['role'];
   
  if (empty($email))
  {
 
echo "<h1>Hello admin plz fill up the dealer name fields<h1><br>";

    exit();
  }

if (empty($pass))
  {
 
echo "<h1>Hello admin plz fill up the password fields<h1><br>";

    exit();
  }

  if($user=='Admin'){
    $sql=mysqli_query($conn,"SELECT * FROM profile where USERNAME='$email' and PASSWORDS='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
         $_SESSION["FULLNAME"] = $row['FULLNAME'];
           $_SESSION["USERNAME"]=$row['USERNAME'];
        $_SESSION["EMAIL"]=$row['EMAIL'];
           $_SESSION["PASSWORDS"]=$row['PASSWORDS']; 
  $_SESSION["USERTYPE"]=$row['USERTYPE'];
          include_once 'admin.html';
        echo "Fetch successful";
    }
    else
    {
        echo "Invalid user name/Password";
    }
  }
  if($user=='Customer'){
    $sql=mysqli_query($conn,"SELECT * FROM profiles where USERNAME='$email' and PASSWORD='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
         $_SESSION["FULLNAME"] = $row['FULLNAME'];
           $_SESSION["USERNAME"]=$row['USERNAME'];
        $_SESSION["EMAIL"]=$row['EMAIL'];
           $_SESSION["PASSWORD"]=$row['PASSWORD']; 
  $_SESSION["USERTYPE"]=$row['USERTYPE'];
          include_once 'ticket_avail.html';
        echo "Fetch successful";
    }
    else
    {
        echo "Invalid user name/Password";
    }
  }
}
?>


</html>