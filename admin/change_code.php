<?php
session_start();
include("connection.php");
$query="select * from tbl_admin";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
   $curdate=$row['date'];

   $pp=$row['password'];
}
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;



if($pp==$op)
{
   if($op==$np)
   {
      echo "Your old password and new password is same";
   }
   else if($np==$cnp)
   {  
       $query3="update tbl_admin set password='$np'";
       mysqli_query($con,$query3);
       session_destroy();
       header("location:index.php");

          
   }
   else
   {
          echo "You new password and confirm new password is not same";
   }

}
else
{
   echo "Your Old password is wrong";
}

           
?>     
            
