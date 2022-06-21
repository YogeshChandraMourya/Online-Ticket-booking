<?php
    $conn=mysqli_connect('localhost','root','','project');
    if($conn->connect_error)
    {
          die('Could not Connect MySql Server:' .$conn->connect_error);
     }
    else{
        if(isset($_POST['update']))
        {
            $NameofthePlace=$_POST['NameofthePlace'];
            $CostofticketforChild=$_POST['CostofticketforChild'];
            $CostofticketforAdult=$_POST['CostofticketforAdult'];
            $stmt1="UPDATE addplace set CostofticketforChild='$CostofticketforChild' where NameofthePlace='$NameofthePlace'";
            $stmt2="UPDATE addplace set CostofticketforAdult='$CostofticketforAdult' where NameofthePlace='$NameofthePlace'";
            if(mysqli_query($conn,$stmt1) && mysqli_query($conn,$stmt2))
            {
                echo"updated successfully..";
            }
            else
            {
                echo "Error updating record";
            }
        }
    }
    $conn->close();
?>