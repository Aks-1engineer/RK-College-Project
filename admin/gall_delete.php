<?php
$gall_id=$_REQUEST['gall_id'];
//echo $tech_id;
include("connection.php");
$query="select * from tbl_gallery where gall_id='$gall_id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $gall_img_name=$row['gall_img_name'];
}
$location="gallery/";
$query2="delete from tbl_gallery where gall_id='$gall_id'";
mysqli_query($con,$query2);
unlink($location.$gall_img_name);
header("location:view_gallery.php");


?>