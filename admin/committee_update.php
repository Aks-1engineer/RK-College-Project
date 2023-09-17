<?php
$cc_id=$_POST['cc_id'];
//echo $dep_id;
$committee_name=$_POST['committee_name'];
//echo $dep_name;
include("connection.php");
$query="update tbl_committee set committee_name='$committee_name',created_at=now() where cc_id='$cc_id'";
mysqli_query($con,$query);
header("location:view_committee.php");


?>