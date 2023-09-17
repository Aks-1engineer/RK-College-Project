<?php
session_start();
include("connection.php");
$email=$_SESSION['admin'];
$query="select * from tbl_admin where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
   $curdate=$row['date'];
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

<body class="Dashboard" style="background-color:white;">
  <!--  <div class="container-fluid">
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
                      
                        <input type="text" value="<?php //echo $curdate; ?>" class="w-100 left-side-col text-white " style="border:none" readonly>
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
                            <ul class="dropdown-menu dropdown-bg">
                              <li><a class="dropdown-item" href="add_notification.php">Add Notification</a></li>
                              <li><a class="dropdown-item" href="show_notification.php">View Notification</a></li>
                            </ul>
                          </div>
                             
                          <div class="btn-group dropend">
                            <button type="button" class="btn logout  dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Department
                            </button>
                            <ul class="dropdown-menu dropdown-bg">
                              <li><a class="dropdown-item" href="add_department.php">Add Department</a></li>
                              <li><a class="dropdown-item" href="view_department.php">View Department</a></li>
                            </ul>
                          </div>
                          <div class="btn-group dropend">
                            <button type="button" class="btn logout dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Teacher
                            </button>
                            <ul class="dropdown-menu dropdown-bg">
                              <li><a class="dropdown-item" href="add_teacher.php">Add Teacher</a></li>
                              <li><a class="dropdown-item" href="view_teacher.php">View Teacher</a></li>
                            </ul>
                          </div>

                          <div class="btn-group dropend">
                            <button type="button" class="btn logout  dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Non-teaching
                            </button>
                            <ul class="dropdown-menu dropdown-bg">
                              <li><a class="dropdown-item" href="add_non-teaching.php">Add Non-teaching</a></li>
                              <li><a class="dropdown-item" href="view_non-teaching.php">View Non-teaching</a></li>
                            </ul>
                          </div>

                          <div class="btn-group dropend">
                            <button type="button" class="btn logout  dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Slider
                            </button>
                            <ul class="dropdown-menu dropdown-bg">
                              <li><a class="dropdown-item" href="add_slider.php">Add Slider</a></li>
                              <li><a class="dropdown-item" href="view_slider.php">View Slider</a></li>
                            </ul>
                          </div>
                          <div class="btn-group dropend">
                            <button type="button" class="btn logout  dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Gallery
                            </button>
                            <ul class="dropdown-menu dropdown-bg">
                              <li><a class="dropdown-item" href="add_gallery.php">Add Gallery</a></li>
                              <li><a class="dropdown-item" href="view_gallery.php">View Gallery</a></li>
                            </ul>
                          </div>
                          <div class="btn-group dropend">
                            <button type="button" class="btn logout  dropdown-toggle mb-1 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Manage Committies
                            </button>
                            <ul class="dropdown-menu dropdown-bg">
                              <li><a class="dropdown-item" href="add_committies.php">Add Committies</a></li>
                              <li><a class="dropdown-item" href="view_committies.php">View Committies</a></li>
                            </ul>
                          </div>
                            <div class="container-fluid">
                               <div class="row">
                                <div class="col-sm-12">
                              <a href="naac.php" class="btn">Manage NACC</a>
                            </div>
                              </div>
                           <ul class="dropdown-menu dropdown-bg">
                              <li><a class="dropdown-item" href="#">Menu item</a></li>
                              <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul> 
                          </div>
                          <div class="btn-group dropend">
                            <button type="button" class="btn logout  dropdown-toggle mb-3 pt-0 text-start" data-bs-toggle="dropdown" aria-expanded="false">
                              Contact us
                            </button>
                            <ul class="dropdown-menu dropdown-bg">
                              <li><a class="dropdown-item" href="#">Menu item</a></li>
                              <li><a class="dropdown-item" href="#">Menu item</a></li>
                              <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                          </div>
            </div>
            </div>
            </div>
            <div class="col-sm-9 bg-white">
               <div class="row bg-white">
                  <div class="col-sm-7 text-center" >
                    <marquee behavior="" direction="">Welcome to Admin panel</marquee></div>
                    <div class="col-sm-2">
                        <a href="logout.php" class="btn logout w-100 pt-0 " >Logout</a>
                    </div>
                    <div class="col-sm-3">
                        <a href="change.php" class="btn logout w-100 pt-0 " >Change Password</a>
                    </div>
                </div> 


-->
                 <!-- dashboard info-->
                 <?php
                 include("connection.php");
                 $query2="select * from tbl_nonteacher";
                 $res2=mysqli_query($con,$query2);

                 ?>
                 <div class="container-fluid mt-3">
                 <a href="dashboard.php" class="btn text-primary" style="text-decoration:none;">⇐Back to Dashboard</a>
  <h3 class="text-center"><b><i>Non-Teaching Staff Details</i></b></h3>
  <table class="table">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Pic</th>
        <th>Name</th>
        <th>Fname</th>
        <th>Qualification</th>
        <th>D.O.B</th>
        <th>Mobile</th>
        <th>Gender</th>
        
        <th>email</th>
        <th>Department</th>
        <th>Designation</th>
        <th>address</th>
        <th>date</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
    <?php
    $a=1;
    while($row2=mysqli_fetch_array($res2))
    {
   ?>
    <tbody>
      <tr>
        <td><?php echo $a;   ?></td>
        <td><img src="Non-teaching/images/<?php echo $row2['pic'];?>" height="100px" width="100px"/></td>
        <td><?php echo $row2['name'];  ?></td>
        <td><?php echo $row2['fname'];  ?></td>
        <td><?php echo $row2['qualification'];  ?></td>
        <td><?php echo $row2['dob'];  ?></td>
        <td><?php echo $row2['mobile'];  ?></td>
        <td><?php echo $row2['gender'];  ?></td>
        
        <td><?php echo $row2['email'];  ?></td>
        <td><?php echo $row2['dept_name'];  ?></td>
        <td><?php echo $row2['designation'];  ?></td>
        <td><?php echo $row2['address'];  ?></td>
        <td><?php echo $row2['dor'];  ?></td>
        <td> <a href="nontech_delete.php?non_id=<?php  echo $row2['0']; ?>"><i class="fa-solid fa-trash"></i></a></td>
        <td><a href="nontech_edite.php?non_id=<?php  echo $row2['0']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
      </tr>
      
      <?php
      $a++;
    }
    ?>
    </tbody>
  </table>
 
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
