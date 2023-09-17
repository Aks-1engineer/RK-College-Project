<?php
                 $acal_id=$_REQUEST['acal_id'];
                 //echo $noti_id;
        
                 include("connection.php");
                 $query="select * from tbl_academic where ac_id='$acal_id'";
                 $res=mysqli_query($con,$query);
                 if($row=mysqli_fetch_array($res))
                 {
                     $filename=$row['file_name'];
                 }
                 $location="academics/file/";
                 $query2="delete from tbl_academic where ac_id='$acal_id'";
                 mysqli_query($con,$query2);
                 unlink($location.$filename);
                 header("location:academic_show.php");

?>
