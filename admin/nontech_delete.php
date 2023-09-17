<?php
$non_id=$_REQUEST['non_id'];
//echo $tech_id;
include("connection.php");
$query="select * from tbl_nonteacher where non_id='$non_id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $pic=$row['pic'];
}
$location="Non-teaching/images/";
$query2="delete from tbl_nonteacher where non_id='$non_id'";
mysqli_query($con,$query2);
unlink($location.$pic);
header("location:view_nontech.php");






?>