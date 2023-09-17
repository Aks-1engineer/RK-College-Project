<?php
$con_id=$_REQUEST['con_id'];
include("connection.php");
$query="delete from tbl_contact where con_id='$con_id'";
mysqli_query($con,$query);
header("location:admin_contact.php");

?>