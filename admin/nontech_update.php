<?php
session_start();
$non_id=$_POST['non_id'];
//echo $non_id;
  $name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$dob=$_POST['dob'];
//echo $dob;
$designation=$_POST['designation'];
//echo $designation;
$gender=$_POST['gender'];
//echo $gender;
$department=$_POST['department'];
//echo $department;
$qualification=$_POST['qualification'];
//echo $highestqualification;
$mobile=$_POST['mnumber'];
//echo $mobile;
$email=$_POST['email'];
//echo $email;
$address=$_POST['address'];
//echo $address;
//header("location:view_nontech.php");
$pic=$_FILES['pic']['name'];
//echo $pic;
$tmp_name=$_FILES['pic']['tmp_name'];
//echo $tmp_name;
//$location="Non-teaching/images/".$pic;
//echo $location;
if($pic=="")
{
include("connection.php");
$query="update tbl_nonteacher set name='$name',fname='$fname',dob='$dob',designation='$designation',gender='$gender',dept_name='$department',qualification='$qualification',mobile='$mobile',email='$email',address='$address' where non_id='$non_id'";
mysqli_query($con,$query);
 header("location:view_nontech.php");
}
else
{  
    $location="Non-teaching/images/";
    include("connection.php");
    $query="select * from tbl_nonteacher  where non_id='$non_id'";
    $res=mysqli_query($con,$query);
    if($row=mysqli_fetch_array($res))
    {
           $filename=$row['pic'];
            unlink($location.$filename);
            $query2="update tbl_nonteacher set name='$name',fname='$fname',dob='$dob',designation='$designation',gender='$gender',dept_name='$department',qualification='$qualification',mobile='$mobile',email='$email',address='$address',pic='$pic' where non_id='$non_id'";
            mysqli_query($con,$query2);
            move_uploaded_file($tmp_name,$location.$pic);
            header("location:view_nontech.php");
    }
    
}
?>