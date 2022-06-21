<?php
    $NameofthePlace=$_POST['NameofthePlace'];
    $Location=$_POST['Location'];
    $AvailabletimeFrom=$_POST['AvailabletimeFrom'];
    $Availabletimeupto=$_POST['Availabletimeupto'];
    $CostofticketforChild=$_POST['CostofticketforChild'];
    $CostofticketforAdult=$_POST['CostofticketforAdult'];
    $Availabletickets=$_POST['Availabletickets'];
    $conn=mysqli_connect('localhost','root','','project');
    if($conn->connect_error)
        {
          die('Could not Connect MySql Server:' .$conn->connect_error);
        }
    else{
    $stmt=$conn->prepare("insert into addplace(NameofthePlace,Location,AvailabletimeFrom,Availabletimeupto,CostofticketforChild,CostofticketforAdult,Availabletickets)
    values(?,?,?,?,?,?,?)");
    $stmt->bind_param("ssiiiii",$NameofthePlace,$Location,$AvailabletimeFrom,$Availabletimeupto,$CostofticketforChild,$CostofticketforAdult,$Availabletickets);
    $stmt->execute();
    echo"Updated successfully..";
    $stmt->close();
    $conn->close();
    }
?>
