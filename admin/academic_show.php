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
                              <li><a class="dropdown-item" href="naac_show.php">View Naac</a></li>
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
                 <?php
                 include("connection.php");
                 $query2="select * from tbl_academic";
                 $res2=mysqli_query($con,$query2);
                 if($res2)
                 {
                  $naac=1;
                 }
                   
                  ?>
                 
<div class="container">
<?php
                 if($naac)
                 {
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Congratulation!</strong> ACADEMICS file saved successfully.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';


                 }
                 ?>
                 <a href="naac.php">⇐Back</a>
  <h3 class="text-center">ALL RECORD RELETED TO ACADEMICS</h3>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Session</th>
        <th>File</th>
        <th>Type</th>
        <th>Date</th>
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
        <td><?php echo $row2['session'];   ?></td>
        <td><a href="academics/file/<?php echo $row2['2']; ?>"><?php echo $row2[2];?></a></td>
        <td><?php echo $row2['type']; ?></td>
        <td><?php echo $row2['added_on']; ?></td>
        <td><a href="academic_delete?acal_id=<?php echo $row2[0]; ?>"><i class="fa-solid fa-trash"></i></a></td>
        <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
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
