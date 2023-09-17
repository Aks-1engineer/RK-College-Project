<?php
$gall_id=$_POST['gall_id'];
//echo $gall_id;
  $title=$_POST['title'];
//echo $title;
$pic=$_FILES['gall_img_name']['name'];
//echo $pic;
$tmp_name=$_FILES['gall_img_name']['tmp_name'];
//echo $tmp_name;
if($pic=="")
{
include("connection.php");
$query="update tbl_gallery set text1='$title',date=now() where gall_id='$gall_id'";
mysqli_query($con,$query);
 header("location:view_gallery.php");
}
else
{  
    $location="gallery/";
    include("connection.php");
    $query="select * from tbl_gallery where gall_id='$gall_id'";
    $res=mysqli_query($con,$query);
    if($row=mysqli_fetch_array($res))
    {
           $filename=$row['gall_img_name'];
            unlink($location.$filename);
            $query2="update tbl_gallery set text1='$title',gall_img_name='$pic',date=now() where gall_id='$gall_id'";
            mysqli_query($con,$query2);
            move_uploaded_file($tmp_name,$location.$pic);
            header("location:view_gallery.php");
            
    }
    
}
?>