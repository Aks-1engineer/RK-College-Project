<?php
$slider_id=$_REQUEST['slider_id'];
//echo $tech_id;
include("connection.php");
$query="select * from tbl_slider where slider_id='$slider_id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $slider_name=$row['pic'];
}
$location="slider/";
$query2="delete from tbl_slider where slider_id='$slider_id'";
mysqli_query($con,$query2);
unlink($location.$slider_name);
header("location:view_slider.php");


?>