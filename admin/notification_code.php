<?php
$notification=$_POST['notification'];
//echo $notification;
if($notification =="")
{
    echo "Please write something about notification";
}
$file_name=$_FILES['file']['name'];
//echo $file_name;
$file_size=$_FILES['file']['size'];
//echo $file_size;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$file_type=$_FILES['file']['type'];
//echo $file_type;
$location="file_rk_uploading/upload/";
if($file_type=='application/pdf')
{
  include("connection.php");
  $query="insert into tbl_notification(notification,file_name,date) value('$notification','$file_name',now())";
  mysqli_query($con,$query);
  //echo "file saved";
  move_uploaded_file($tmp_name,$location.$file_name);
  header("location:add_notification.php?save=6");
}
else
{
echo "selet a pdf file";
}




?>