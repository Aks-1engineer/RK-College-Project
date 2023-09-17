<?php
$department=$_POST['department'];

include("connection.php");
$query="insert into tbl_department(dep_name,date) value('$department',now())";
mysqli_query($con,$query);
header("location:dashboard.php");



?>