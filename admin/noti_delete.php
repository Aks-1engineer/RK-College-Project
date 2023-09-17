<?php
                 $noti_id=$_REQUEST['noti_id'];
                 //echo $noti_id;
        
                 include("connection.php");
                 $query="select * from tbl_notification where noti_id='$noti_id'";
                 $res=mysqli_query($con,$query);
                 if($row=mysqli_fetch_array($res))
                 {
                     $filename=$row['file_name'];
                 }
                 $location="file_rk_uploading/upload/";
                 $query2="delete from tbl_notification where noti_id='$noti_id'";
                 mysqli_query($con,$query2);
                 unlink($location.$filename);
                 header("location:show_notification.php");

?>
