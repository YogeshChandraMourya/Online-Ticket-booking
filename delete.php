<?php
   $conn=mysqli_connect("localhost","root","");
   $db=mysqli_select_db($conn,'project');
   if(isset($_POST['delete']))
   {
       $NameofthePlace=$_POST['NameofthePlace'];
       $query= "delete from addplace where NameofthePlace='$NameofthePlace'";
       $query_run=mysqli_query($conn,$query);
       if($query_run)
       {
           echo "data deleted";
       }
       else{
           echo"data not deleted";
       }
   }
?>