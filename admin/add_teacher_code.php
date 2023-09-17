<?php
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
$pic=$_FILES['pic']['name'];
//echo $pic;
$tmp_name=$_FILES['pic']['tmp_name'];
//echo $tmp_name;
$location="teacher/image/".$pic;
//echo $location;
$email=$_POST['email'];
//echo $email;
$address=$_POST['address'];
//echo $address;
include("connection.php");
$query="insert into tbl_teacher(name,fname,dob,designation,gender,dept_name,qualification,mobile,pic,email,address,dor) 
value('$name','$fname','$dob','$designation','$gender','$department','$qualification','$mobile','$pic','$email','$address',now())";
 mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location);
header("location:dashboard.php");
?>