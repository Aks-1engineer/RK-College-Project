<?php
$dep_id=$_REQUEST['dep_id'];
include("connection.php");
$query="delete from tbl_department where dep_id='$dep_id'";
mysqli_query($con,$query);
header("location:view_department.php");

?>