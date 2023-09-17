<?php
$tech_id=$_REQUEST['tech_id'];
//echo $tech_id;
include("connection.php");
$query="select * from tbl_teacher where tech_id='$tech_id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $pic=$row['pic'];
}
$location="teacher/image/";
$query2="delete from tbl_teacher where tech_id='$tech_id'";
mysqli_query($con,$query2);
unlink($location.$pic);
header("location:view_teacher.php");






?>