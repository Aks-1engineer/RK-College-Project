<?php
session_start();
$teacher=0;
include("connection.php");
$email=$_SESSION['admin'];
$query="select * from tbl_admin where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
   $curdate=$row['date'];
}

$query3="select * from tbl_department";
$res3=mysqli_query($con,$query3);

if($_SERVER['REQUEST_METHOD']=='POST')
{
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
$query2="insert into tbl_teacher(name,fname,dob,designation,gender,dept_name,qualification,mobile,pic,email,address,dor) 
value('$name','$fname','$dob','$designation','$gender','$department','$qualification','$mobile','$pic','$email','$address',now())";
 $res2=mysqli_query($con,$query2);
move_uploaded_file($tmp_name,$location);
if($res2)
{
  $teacher=1;
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap css file start-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--bootstrap css file end-->

    <!--custom css file start-->
    <link rel="stylesheet" href="css/style.css">
    <!--custom css file end-->

    <!--font awesome cdn link start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--font awesome cdn link end-->

    <!--animate.css link start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--animate.css link close-->
    <!--bootstrap js file start-->
    <script src="js/bootstrap.bundle.js"></script>

    <!--bootstrap js file end-->
    <title>Dashboard || RK COLLEGE</title>
</head>
<body class="Dashboard">
    <div class="container-fluid">
        <div class="row mx-1 mt-1">
            <div class="col-sm-3 left-side-col">
                <div class="row">
                    <div class="col-sm-12"><img src="images/logo.jpg" alt="" class="w-25 d-block mx-auto" ></div>
                    <div class="row">
                    <div class="col-sm-12"><p class="pb-0 text-white text-center">R.K.College Madhubani(Bihar)</p></div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-4"><img src="images/avtar.png" alt="" class="w-100 h-100"></div>
                    <div class="col-sm-8">
                        <p class="text-white"><i class="fa-solid fa-envelope"></i>admin@gmail.com</p>
                      
                        <input type="text" value="<?php echo $curdate; ?>" class="w-100 left-side-col text-white " style="border:none" readonly>
                     </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                          <div class="btn-group dropend">
                            <a href="dashboard.php" class="btn logout  dropdown-toggle mb-1 pt-0 text-start">
                            
                              Dashboard
                            </button>
                            </a>
                            </div>
                            
                            <div class="btn-group dropend">
                             <button type="button" class="btn logout  dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Notification
                            </button>
                            <ul class="dropdown-menu dropdown-bg form-control text-center">
                              <li><a class="dropdown-item" href="add_notification.php">Add Notification</a></li>
                              <li><a class="dropdown-item" href="show_notification.php">View Notification</a></li>
                            </ul>
                          </div>
                             
                          <div class="btn-group dropend">
                            <button type="button" class="btn logout  dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Department
                            </button>
                            <ul class="dropdown-menu dropdown-bg form-control text-center">
                              <li><a class="dropdown-item" href="add_department.php">Add Department</a></li>
                              <li><a class="dropdown-item" href="view_department.php">View Department</a></li>
                            </ul>
                          </div>
                          <div class="btn-group dropend">
                            <button type="button" class="btn logout dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Teacher
                            </button>
                            <ul class="dropdown-menu dropdown-bg form-control text-center">
                              <li><a class="dropdown-item" href="add_teacher.php">Add Teacher</a></li>
                              <li><a class="dropdown-item" href="view_teacher.php">View Teacher</a></li>
                            </ul>
                          </div>

                          <div class="btn-group dropend">
                            <button type="button" class="btn logout  dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Non-teaching
                            </button>
                            <ul class="dropdown-menu dropdown-bg form-control text-center">
                              <li><a class="dropdown-item" href="add_nontech.php">Add Non-teaching</a></li>
                              <li><a class="dropdown-item" href="view_nontech.php">View Non-teaching</a></li>
                            </ul>
                          </div>

                          <div class="btn-group dropend">
                            <button type="button" class="btn logout  dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Academics
                            </button>
                            <ul class="dropdown-menu dropdown-bg form-control text-center">
                              <li><a class="dropdown-item" href="add_academics.php">Add Academics</a></li>
                              <li><a class="dropdown-item" href="academic_show.php">View Academics</a></li>
                            </ul>
                          </div>

                          <div class="btn-group dropend">
                            <button type="button" class="btn logout  dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Slider
                            </button>
                            <ul class="dropdown-menu dropdown-bg form-control text-center">
                              <li><a class="dropdown-item" href="add_slider.php">Add Slider</a></li>
                              <li><a class="dropdown-item" href="view_slider.php">View Slider</a></li>
                            </ul>
                          </div>
                          <div class="btn-group dropend">
                            <button type="button" class="btn logout  dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Gallery
                            </button>
                            <ul class="dropdown-menu dropdown-bg form-control text-center">
                              <li><a class="dropdown-item" href="add_gallery.php">Add Gallery</a></li>
                              <li><a class="dropdown-item" href="view_gallery.php">View Gallery</a></li>
                            </ul>
                          </div>
                          <div class="btn-group dropend">
                            <button type="button" class="btn logout  dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Committies
                            </button>
                            <ul class="dropdown-menu dropdown-bg form-control text-center">
                              <li><a class="dropdown-item" href="add_committee.php">Add Committies</a></li>
                              <li><a class="dropdown-item" href="view_committee.php">View Committies</a></li>
                            </ul>
                          </div>

                          <div class="btn-group dropend">
                            <button type="button" class="btn logout  dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Committiee Members
                            </button>
                            <ul class="dropdown-menu dropdown-bg form-control text-center">
                              <li><a class="dropdown-item" href="add_comm_member.php">Add Committee Members</a></li>
                              <li><a class="dropdown-item" href="view_comm_member.php">View Committee Members</a></li>
                            </ul>
                          </div>

                          <div class="btn-group dropend">
                            <button type="button" class="btn logout  dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Naac
                            </button>
                            <ul class="dropdown-menu dropdown-bg form-control text-center">
                              <li><a class="dropdown-item" href="naac.php">Add Naac</a></li>
                              <li><a class="dropdown-item" href="view_naac.php">View Naac</a></li>
                            </ul>
                          </div>
                          
                          <div class="container-fluid">
                               <div class="row">
                                <div class="col-sm-12">
                              <a href="admin_contact.php" class="btn logout ps-0 pt-0 text-start">Contact Us</a>
                            </div>
                              </div>
                              </div> 
            </div>
            </div>
            </div>
            <div class="col-sm-9 bg-white">
                <div class="row bg-white">
                  <div class="col-sm-10 text-center" >
                    <marquee behavior="" direction="">Welcome to Admin panel</marquee></div>
                    <div class="col-sm-2">
                        <a href="logout.php" class="btn logout w-100 pt-0 " >Logout</a>
                    </div>
                </div>
                 <!-- dashboard info-->
                 <div class="row">
                 <h3 class="text-center"><b><i>Add Teacher</i></b></h3>
                 <?php
                 if($teacher)
                 {
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Alert!</strong> Teacher added successfully.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';


                 }
                 ?>
                        <div class="col-sm-6">
                        <form action="add_teacher.php" method="post" enctype="multipart/form-data">
                          
                            Name<superscript style="color:red;">*</superscript>
                            <input type="text" placeholder="Enter name" name="name" class="form-control mb-2" required>

                            Father's Name<superscript style="color:red;">*</superscript>
                            <input type="text" placeholder="Enter father's name" name="fname" class="form-control mb-2" required>
    
                      Date of Birth<superscript style="color:red;">*</superscript>
                      <input type="text" placeholder="Enter date of birth" name="dob" class="form-control mb-2" required>

                            
                            Designation<superscript style="color:red;">*</superscript>
                            <input type="text" placeholder="Enter designation" name="designation" class="form-control mb-3" required>
                          
                            Select Gender<superscript style="color:red;">*</superscript>
                            <br>
                            
                            <input type="radio" name="gender" value="male" class="ms-3" required>Male 
                            <input type="radio" name="gender" value="female" class="ms-5" required>Female
                          

                        </div>
                        <div class="col-sm-6">
                            Department<superscript style="color:red;">*</superscript>
                      
                            <select name="dept_name" class="form-control mb-2">
                              <option value="">--select department--</option>
                              <?php 
                                while($row3=mysqli_fetch_array($res3))
                                {
                                  ?>
                                  <option value="<?php echo $row3['dep_name'];?>"><?php echo $row3['dep_name'];?></option>
                                  <?php
                                }
                                ?>
                            </select>
                
                            Highest Qualification<superscript style="color:red;">*</superscript>
                            <input type="text" placeholder="Enter Highest Qualification" name="qualification" class="form-control mb-2" required>
                            Mobile<superscript style="color:red;">*</superscript>
                            <input type="number" placeholder="Enter mobile number" name="mnumber" class="form-control mb-2" required>
                            Upload Pic <superscript style="color:red;">*</superscript>
                            <input type="file" placeholder="Upload a pic" name="pic" class="form-control mb-2" required>
                            
                            Email<superscript style="color:red;">*</superscript>
                            <input type="email" placeholder="Enter email id" name="email" class="form-control" required>
                          
                        </div>
                  
                          
                        <div class="row">
                            <div class="col-sm-12 mt-2">
                              Address<superscript style="color:red;">*</superscript>
                                <textarea name="address" id="" cols="30" rows="6" class="form-control  my-textarea" placeholder="Enter address" required></textarea>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-sm-6 text-end my-3">
                            <input type="submit" class="btn btn-success px-5" value="Add">
  
                            </div>
                            <div class="col-sm-6 my-3">
                            <input type="reset" class="btn btn-success px-5" value="Reset">
                            </div>
                        </div>
                    </form>
                 </div>
                 <!-- dashboard info end -->
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12 p-2 mt-1 text-white footer text-center">Copyright © | R.K. College,Madhubani(Bihar)| Designed and Developed by Amit kumar sharma</div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>




<!--<a href="#" class="ps-5 ">Dashboard</a>-->
