<?php
$gall_image=$_FILES['gall_image']['name'];
//echo $gall_image;
$tmp_name=$_FILES['gall_image']['tmp_name'];
//echo $tmp_name;
include("connection.php");
$query="insert into tbl_gallery(gall_img_name,date) value('$gall_image',now())";
mysqli_query($con,$query);
//header("location:add_gallery.php");
$location="gallery/".$gall_image;
//echo $location;
move_uploaded_file($tmp_name,$location);
//echo "uploaded successfully";
?>