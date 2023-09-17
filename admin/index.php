<?php
//$msg=$_REQUEST['msg'];
//echo $msg;
//if($msg==3)
//{
  //  $msgerr1="logout successfully";
//}
//$msg=$_REQUEST['msg'];
//echo $msg;
$login=0;
$Invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include("connection.php");
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="select * from tbl_admin where email='$email' and password='$password'";
    $res=mysqli_query($con,$query);
    if($res)
    {
        $num=mysqli_num_rows($res);
        if($num>0)
        {
           $login=1;
           session_start();
           $_SESSION['admin']=$email;
           header("location:dashboard.php");
        }
        else
        {
            $Invalid=1;
        }
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
    <title>Login page || RK COLLEGE</title>
</head>

<body class="bg-images">
    <div class="wrapper pt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 left-side-login outer-body">
                    
                            <div class="my-div text-center">
                                <img src="images/logo.jpg" alt="" class="d-blck mx-auto logo-height">
                                <p class="mt-2 text-white text-center">Ram Krishna College, Madhubani
                                </p>
                                <span class=" mt-0 text-white text-center">CAS (College ERP)</span>
                                
                               <marquee behavior="" direction="left" scrollamount="3" onmouseover="stop()" onmouseleave="start()"> <p class="mt-3 bg-white text-center">Welcome to Admin Login Panel</p></marquee>
                               <br>
                              
                               
                            </div>
                        
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12 form-bg text-white p-5">
                            <form action="index.php" method="post">
                                <div class="row">
                                    <div class="col-sm-12 text-center" style="border:none;"><h1><b><i>Admin Login</i></b></h1></div>
                                 </div>
                                 <?php  
                                 if($Invalid)
                                 {
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                 <strong>Wrong data!</strong> Please fill correct data.
                                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                               </div>';
                            }
               
                                 ?>

                                Enter Username:
                                <i class="fa-solid fa-user"></i> <input type="email" placeholder="Enter username" name="email" class="form-control" required>
                                <br />

                                Enter Password:<i class="fa-solid fa-key"></i>
                                <input type="password" placeholder="Enter password" name="password"
                                    class="form-control" required>
                                <br />

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"required>
                                            <label class="form-check-label" for="flexSwitchCheckDefault">Remember me</label>
                                          </div>
                                    </div>
                                    <div class="col-sm-6 text-end"> <a href="forgot.html" class="text-white">Forgot password?</a></div>
                                </div>

                                <br>
                                <input type="submit" class="form-control bg-success text-white" value="Login ⇒">
                                <a href="../index.php" class="btn mt-1 mb-1 text-white border-0">⇐ Back to Home</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
           <div class="row pt-3">
              <div class="col-sm-12 p-3 text-white footer text-center">Copyright © | R.K. College,Madhubani(Bihar)| Designed and Developed by Amit kumar sharma</div>
            </div>
        </div>
    </div>
</body>

</html>