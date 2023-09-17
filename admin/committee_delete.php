<?php
$cc_id=$_REQUEST['cc_id'];
include("connection.php");
$query="delete from tbl_committee where cc_id='$cc_id'";
mysqli_query($con,$query);
header("location:view_committee.php");

?>