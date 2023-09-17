<?php
session_start();
$noti_id=$_POST['noti_id'];
//echo $noti_id;
$notification=$_POST['notification'];
//echo $notification; 
$newfile_name=$_FILES['file']['name'];
//echo $newfile_name;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
if($newfile_name=="")
{
    include("connection.php");
    $query="update tbl_notification set notification='$notification' where noti_id='$noti_id'";
    mysqli_query($con,$query);
     header("location:show_notification.php");
}
else
{  
    $location="file_rk_uploading/upload/";
    include("connection.php");
    $query="select * from tbl_notification where noti_id='$noti_id'";
    $res=mysqli_query($con,$query);
    if($row=mysqli_fetch_array($res))
    {
           $filename=$row['file_name'];
          //echo $filename;
            unlink($location.$filename);
            $query2="update tbl_notification set notification='$notification',file_name='$newfile_name' where noti_id='$noti_id'";
            mysqli_query($con,$query2);
            move_uploaded_file($tmp_name,$location.$newfile_name);
            header("location:show_notification.php");
    }
    
}

?>