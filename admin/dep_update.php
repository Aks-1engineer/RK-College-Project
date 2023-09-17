<?php
$dep_id=$_POST['dep_id'];
//echo $dep_id;
$dep_name=$_POST['dep_name'];
//echo $dep_name;
include("connection.php");
$query="update tbl_department set dep_name='$dep_name',date=now() where dep_id='$dep_id'";
mysqli_query($con,$query);
header("location:view_department.php");


?>