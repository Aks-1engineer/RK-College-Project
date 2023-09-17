<?php

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
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> 
  <!--animate.css link close-->
  <!--bootstrap js file start-->
  <script src="js/bootstrap.bundle.js"></script>

  <!--bootstrap js file end-->
  <title>HOME || RK COLLEGE</title>
</head>

<body style="background-color:#aaa48c;">

 <!--scroll to top icon-->
 <style>
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: rgb(2, 56, 156);
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }
    #myBtn:hover {
      background-color: rgb(103, 18, 18);
    }
    </style>  
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    
    <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }


    </script>

  <!--Scroll to top icon end-->


   <div class="container my-5">
    <!--main Outer start-->

    <!--topbar start-->
    <div class="row topbar ">
      <div class="col-sm-4"><i class="fa-solid fa-phone font-awesome-icon"></i><a href="tel:798287508"
          class="text-white">7985287508</a> <i class="fa-solid fa-phone font-awesome-icon"></i><a href="tel:9565563934"
          class="text-white">9565563934</a> <i class="fa-brands fa-whatsapp font-awesome-icon"></i><a
          href="tel:9565563934" class="text-white">9565563934</a></div>
      <div class="col-sm-3 text-center"><i class="fa-solid fa-envelope font-awesome-icon"></i><a
          href="mailto:info@rkcollegemumbai.in" class="text-white">info@rkcollegemumbai.in</a></div>
      <div class="col-sm-5 text-end text-white"><i class="fa-solid fa-location-dot font-awesome-icon"></i>Pupri - Madhubani Rd, Baingra, Madhubani, Bihar 847211

      </div>
    </div>
    <!--topbar end-->
    <!--college logo name search icon start-->
   
     <div class="row bg-white">
      <div class="col-sm-2"><img src="images/collegelogo.png" class="w-100 ms-5 h-100 pb-3" alt="logo"></div>
      <div class="col-sm-5 pt-3 text-center">
        <h1>RAM KRISHNA COLLEGE</h1>
         <h3>MADHUBANI(BIHAR)</h3>
        <p class="text-center">(A Constituent Unit of Lalit Narayan Mithila University, Darbhanga)</p>
      </div>
    
      <div class="col-sm-5">
        <ul class="search-icon">
          <li><a href="https://www.facebook.com/rkcmadhubani/" target="_blank"><i class="fa-brands fa-facebook" title="facebook"></i></a></li>
          <li><a href=""><i class="fa-brands fa-twitter" title="twitter"></i></a></li>
          <li><a href=""><i class="fa-brands fa-linkedin-in" title="linkedin"></i></a></li>
          <li><a href="https://www.instagram.com/r.k.college_bihar/" target="_blank"><i class="fa-brands fa-instagram" title="instagram"></i></a></li>
          <li><a href="https://groupsorlink.com/rk-college-whatsapp-group-link-study-material/" target="_blank"><i class="fa-brands fa-whatsapp" title="whatsapp"></i></a></li>
        </ul><pre class="text-center">                                          <a href="admin/index.php" style="text-decoration:none; color:#002147"><h5><i class="fa-solid fa-gear"></i>COLLEGE AUTOMATION SYSTEM</h5></a></pre>
      </div>
    </div>
    <!--college logo name search icon end-->

    <!--menu bar start-->
    <div class="row sticky-top mt-3">
      <nav class="navbar navbar-expand-lg menubar">
        <div class="container-fluid text-center">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto  mb-2 mb-lg-0">
              <li class="nav-item menubar-icon-size">
                <a class="nav-link active text-white" aria-current="page" href="index.php">HOME</a>
          </li>
              <li class="nav-item dropdown menubar-icon-size">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  ABOUT US
                </a>
                <ul class="dropdown-menu menubar-icon-size">
                  <li><a class="dropdown-item" href="about.php">About college</a></li>
                  <li><a class="dropdown-item" href="principaldesk.php">From the Principal's desk</a></li>
                </ul>
              </li> <li class="nav-item dropdown menubar-icon-size">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  DEPARTMENT
                </a>
                <ul class="dropdown-menu menubar-icon-size">
                  <li><a class="dropdown-item" href="science.php">Science Department</a></li>
                  <li><a class="dropdown-item" href="arts.php">Arts Department</a></li>
                </ul>
              </li>

              </li> <li class="nav-item dropdown menubar-icon-size">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  STAFF
                </a>
                <ul class="dropdown-menu menubar-icon-size">
                  <li><a class="dropdown-item" href="teaching.php">Teaching Staff</a></li>
                  <li><a class="dropdown-item" href="nonteaching.php">Non-Teaching Staff</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown menubar-icon-size">
              <li class="nav-item menubar-icon-size">
                <a class="nav-link text-white" href="comm.php">COMMITTEE</a>
              </li>
              </li>
              

              
              <li class="nav-item dropdown menubar-icon-size">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  ACADEMIC
                </a>
                <ul class="dropdown-menu menubar-icon-size">
                  <li><a class="dropdown-item" href="acal.php">Academic Calender</a></li>
                  <li><a class="dropdown-item" href="feestructure.php">Fee structure</a></li>
                  <li><a class="dropdown-item" href="timetable.php">Time Table</a></li>
                </ul>
              </li>
              <li class="nav-item menubar-icon-size">
                <a class="nav-link text-white" href="gallery.php">GALLERY</a>
              </li>

              
              <li class="nav-item dropdown menubar-icon-size">
              <li class="nav-item menubar-icon-size">
                <a class="nav-link text-white" href="contactus.php">CONTACT US</a>
              </li>
              </li>

              <li class="nav-item dropdown menubar-icon-size">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  NAAC
                </a>
                <ul class="dropdown-menu menubar-icon-size">
                  <li><a class="dropdown-item" href="aqar.php">AQAR</a></li>
                  <li><a class="dropdown-item" href="ssr.php">SSR</a></li>
                </ul>
              </li>
              <li class="nav-item menubar-icon-size">
                <a class="nav-link text-white" href="#">STUDY MATERIALS</a>
              </li>

            </ul>
            
          </div>
        </div>
      </nav>
    </div>
    <!--menu bar end-->

    <!--slider start-->
    <div class="row mt-3">
      <div class="col-sm-12 p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/slider/slider1.jpg" class="d-block w-100 h" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/slider/slider2.jpg" class="d-block w-100 h" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/slider/slider3.jpg" class="d-block w-100 h" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/slider/slider4.jpg" class="d-block w-100 h" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/slider/slider5.jpg" class="d-block w-100 h" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    </div>
    <!--slider end-->

    <!--marquee tag start-->
    <div class="row mt-3 slider-basicinfo">
      <div class="col-sm-12 text-center text-white"><b><i><h4>IMPORTANT INFORMATION</h4></i></b></div>
    </div>
    <?php 
    include("connection.php");
    $query="select * from tbl_notification";
    $res=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($res))
    {
      ?>
      <div class="row mt-3 text-white">
      <div class="col-sm-12 text-white">
        <marquee behavior="" direction=""><a href="file_rk_uploading/upload/<?php echo $row['notification']; ?>"><?php echo $row['notification']; ?></a></marquee>
      </div>
    </div>
    <?php
    }
    ?>
    <!--
    <div class="row slider-basicinfo">
      <div class="col-sm-4 text-white">
        <marquee behavior="" direction="">feedback</marquee>
      </div>
      <div class="col-sm-4 text-white">
        <marquee behavior="" direction="">information</marquee>
      </div>
      <div class="col-sm-4 text-white">
        <marquee behavior="" direction="">news</marquee>
      </div>
    </div> -->
    <!--marquee tag end-->

    <!--about college start-->
    <div class="row pt-2 bg-white mt-3">
      <div class="col-sm-5"><img src="images/slider/slider1.jpg" class="w-100" alt=""></div>
      <div class="col-sm-7">
        <h4 class="text-center">Welcome to Ram Krishna college,Madhubani</h4>
        <p class="justify-content">Ram Krishna college, Madhubani, a Co-educational constituent college of Lalit Narayan Mithila University, Darbhanga situated at the foothills of the Himalaya and in the heartland of Mithila, was established in 1940 by Baboo Ram Krishna Purbey. He envisioned a high class educational institution; an institution that will mould and guide future generations to enlightment. This dream has come a long way in the last seven decades.
          This premier college was established as an Under Graduate college in August, 1940 and was affiliated to Patna University in 1941. Thenceforth, it started teaching in Arts, Science and Commerce catering to the academic needs of the people of this border
          <a href="about.php" class=""><input type="button" value="Read more" class="btn mt-2 bg-danger readmore-width text-center"></a>  
        </p>
         
      </div>
    </div>
    <!--about college end-->

    <!--Organasational head image start-->
    <div class="row mt-3">
      <div class="col-sm-12 slider-basicinfo text-white text-center"><h6> <==========ORGANISATIONAL HEADS==========> </h6></div>
    </div>
    <div class="row mt-3">
      <div class="col-sm-3"><div class="card">
        <img src="images/mentor/cm_nitish_kumar-removebg-preview.png" class="card-img-top card-images-height border border-5" alt="...">
        <div class="card-body card-body-size">
          <p class="card-text text-center">SHRI NITISH KUMAR,
            Hon'ble chief minister of 
             Bihar.</br>
          <a href="https://en.wikipedia.org/wiki/List_of_chief_ministers_of_Bihar" target="_blank" class="btn know-more py-0">Know more</a></p>
        </div>
      </div></div>
      <div class="col-sm-3"><div class="card">
        <img src="images/mentor/vkc.png" class="card-img-top card-images-height border border-5" alt="...">
        <div class="card-body card-body-size">
          <p class="card-text text-center">SHRI SUMIT KUMAR SINGH,
            Hon'ble minister
            Technical Education Bihar
          <a href="https://en.wikipedia.org/wiki/Sumit_Kumar_Singh" class="btn know-more py-0">Know more</a></p>
        </div>
      </div></div>
      <div class="col-sm-3 "><div class="card">
        <img src="images/mentor/spsingh-removebg-preview.png" class="card-img-top card-images-height border border-5" alt="...">
        <div class="card-body card-body-size">
          <p class="card-text text-center">PROF. (DR) SURENDRA PRATAP SINGH,
            Hon'ble Vice
            Chancellor
          <a href="#" class="btn know-more py-0">Know more</a></p>
        </div>
      </div></div>
      <div class="col-sm-3"><div class="card">
        <img src="images/mentor/dr-Phulo-Paswan-Principal-Sir-removebg-preview.png" class="card-img-top card-images-height border border-5" alt="...">
        <div class="card-body card-body-size">
          <p class="card-text text-center">PROF. (DR) PHULO PASWAN,
            Hon'ble Principal
          <a href="#" class="btn know-more py-0">Know more</a></p>
        </div>
      </div></div>
    </div>
    <!--Organasational head image end-->

    <!--design start -->
    <div class="row below-heads-images mt-3">
      <div class="col-sm-12">
        <marquee>Welcome to RK college,Madhubani</marquee>
      </div>
      <div class="col-sm-12" >
        <marquee direction="right">
          Phone No. & Fax – 06276-222264 
          </marquee>
      </div>
      <div class="col-sm-12">
        <marquee>Address : R.K. College Madhubani
          Pupri - Madhubani Rd, Baingra, Madhubani, Bihar 847211
          </marquee>
      </div>
    </div>
    <!--design end-->

    <!--principal messege start-->
      
        <div class="row py-3 bg-white mt-3">
          <div class="col-sm-3"><img src="images/slider/slider2.jpg" class="w-100 h-100" alt=""></div>
              <div class="col-sm-2"><img src="images/mentor/Dr-Phulo-Paswan-Principal-Sir-removebg-preview.png" class="w-100" alt="Principal">
                <div class="card-body card-body-size">
                  <p class="card-text text-center">Shri Sumit Kumar Singh,
                    Hon'ble minister
                    Technical Education Bihar
                  <a href="principaldesk.php" class="btn know-more py-0 ">Know more</a></p>
                  </div>
              </div>

            <div class="col-sm-7">
              <h4 class="text-center">🙏🙏Principal messege🙏🙏</h4>
                 <p class="justify-content">Welcome to R.K. College- one of the largest constituent Colleges of Lalit Narayan Mithila University- a premier institution, with highly qualified academicians imparting education in arts, science and Commerce from Inter to PG level. The college enjoys a reputation for outstanding performance in academics, sports and extra-curricular activities.
                  My sincere advice to all the admission seekers to the college is to be disciplined, honest, hardworking and sincere in their studies to reach the pinnacle of success. Our mission is to help our students to grow intellectually, personally and professionally so that they feel internally empowered and compelled to make significant positive contribution to the organizations they serve and to the Nation as a whole.Rightly Einstein said “Genius is 1% talent and 99% hard work”
                    <a href="principaldesk.php">Read more</a> </p>
            </div>
           <!-- <div class="col-sm-3"><img src="images/slider/slider3.jpg" class="w-100 h-100" alt=""></div> -->
            
        </div>
      

    <!--principal messege end-->

     
    <!--faculty department progrms hostellers students alumni info start-->
    
      <div class="row books-bg text-center text-white mt-3">
        <div class="col-sm-4 d-block  mx-auto">
          <h4>30+</h4>
          <p>----------------------------------</p>
          <h4>Faculty</h4>
        </div>
        <div class="col-sm-4">
          <h4>25+</h4>
          <p>----------------------------------</p>
          <h4>Department</h4>
        </div>
        <div class="col-sm-4">
          <h4>25+</h4>
          <p>----------------------------------</p>
          <h4>Courses</h4>
        </div>
      </div>
      <div class="row books-bg text-center text-white  pt-5">
        <div class="col-sm-4">
          <h4>500+</h4>
          <p>----------------------------------</p>
          <h4>Hostellers</h4>
        </div>
        <div class="col-sm-4">
          <h4>1000+</h4>
          <p>----------------------------------</p>
          <h4>Students</h4>
        </div>
        <div class="col-sm-4">
          <h4>10000+</h4>
          <p>----------------------------------</p>
          <h4>Alumni</h4>
        </div>
      </div>
      
    

    <!--faculty department progrms hostellers students alumni info end-->

    <!--explore more about RK college,madhubani starts-->
     
    <div class="row mt-3">
      <div class="col-sm-8">
        <div class="row me-2 ">
          <div class="col-sm-12 text-center footer-color"><h4>Current function</h4></div>
        </div>
        <!--slider of current function start-->
        <div class="row mt-3 me-2 bg-white">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/slider/slider1.jpg" class="d-block w-100 current-slider-height" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/slider/slider2.jpg" class="d-block w-100 current-slider-height" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/slider/slider3.jpg" class="d-block w-100 current-slider-height" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
        <!--slider of current function end-->

      </div>
      <div class="col-sm-4">
        <div class="row">
          <div class="col-sm-12 text-center footer-color"><h4>Explore more about RK college</h4></div>
          <div class="row mt-3 mx-0 bg-white">
          <iframe src="https://www.youtube.com/embed/cS-wg1o8h-k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-100" height="400px" >
          </iframe>
          </div>
        </div>
      </div>
    </div>


    <!--explore more about RK college,madhubani end-->
   
     <!--testimonial slider start -->
        <div class="row bg-white testimonial mt-3">
        <div id="carouselExampleIndicators" class="carousel helloo slide" data-bs-ride="true">
          <div class="carousel-indicators-icone">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="imgbox animate__animated animate__bounceInRight animate__delay-2s">
                <img src="images/testimonials/test2.webp" class="w-100" alt="...">
               </div>
               <div class="carousel-caption animate__animated animate__bounceInLeft animate__delay-3s">
                <h3>Rakesh sharma</h3>
                <p>“Think Different, that is one thing that Sharda University urges in and
                   to far extent succeed in teaching to its students which invariably helps
                    to achieve what you need. It nourished me and thus gave me an opportunity
                     to define me.</p>
              </div>  
            </div>
            <div class="carousel-item">
              <div class="imgbox animate__animated animate__bounceInRight animate__delay-2s">
                <img src="images/testimonials/test1.jfif" class=" w-100" alt="...">
               </div>
               <div class="carousel-caption animate__animated animate__bounceInLeft animate__delay-3s">
                <h3>Shalini Kumari</h3>
                <p>I am grateful to Ram Krishna College- both the faculty and the
                   Training & Placement Department. They've made efforts ensuring maximum 
                   number of placed students. The university started grooming us for placements 
                   in the first few months including courses such as Professional Excellence Program 
                   and Professional Skills Enhancement.</p>
              </div>  
          </div>

              <div class="carousel-item">
              <div class="imgbox animate__animated animate__bounceInRight animate__delay-2s">
                <img src="images/testimonials/test3.jpg" class=" w-100" alt="...">
               </div>
               <div class="carousel-caption animate__animated animate__bounceInLeft animate__delay-3s">
                <h3>Ravi Pratap vishwkarma</h3>
                <p>During my stay of four years in Ram Krishna College, 
                  I came across various people of different country and culture.
                   I had received a lot of opportunities to groom myself, thanks to
                    my ever inspiring mentors who helped me to discover the talented part
                     of myself.</p>
              </div>  
          </div>


              <div class="carousel-item">
              <div class="imgbox animate__animated animate__bounceInRight animate__delay-2s">
                <img src="images/testimonials/test5.jpg" class=" w-100" alt="...">
               </div>
               <div class="carousel-caption animate__animated animate__bounceInLeft animate__delay-3s">
                <h3>Brijesh Kumar</h3>
               <p> Ram Krishna College has always believed in helping and guiding
                 its students and it was no different during the placement season.
                  Regular classes held at our college to help us with our aptitude 
                 and technical skills were of great help.</p>

                 </div>  
            </div>

            <div class="carousel-item">
              <div class="imgbox animate__animated animate__bounceInRight animate__delay-2s">
                <img src="images/testimonials/test4.jfif" class=" w-100" alt="...">
               </div>
               <div class="carousel-caption animate__animated animate__bounceInLeft animate__delay-3s">
                <h3>Nagendra Singh</h3>
                <p>I loved the infrastructure of Ram Krishna College,Madhubani(Bihar) and its 
                  International life. The events that I took part helped me to 
                  grow my confidence level. I would like to specially thank the 
                  placement cell for guiding me and providing me a good platform (company)
                   for my career.</p>
              </div>  
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
     <!--testimonial slider end-->
   <!--footer start-->
   <div class="row footer-color mt-3 pb-3">
    <div class="col-sm-3 ">
      <h6 class="pt-3 text-center">Useful Links:</h6>
      <hr/>
      <ul class="footer-icon">
        <li><a href="about.php">About College</a></li>
        <li><a href="comm.php">College Committees</a></li>
        <li><a href="principaldesk.php">Principal's Desk</a></li>
        <li><a href="science.php">Science Department</a></li>
        <li><a href="arts.php">Arts Department</a></li>
        <li><a href="teaching.php">Teaching Staff</a></li>
        <li><a href="nonteaching.php">Non-Teaching Staff</a></li>
      </ul>
    </div>
    <div class="col-sm-2">
      <h6 class="pt-3 text-center">Quick Links</h6>
      <hr>
      <ul class="footer-icon">
        <li><a href="acal.php">Academic Calender</a></li>
        <li><a href="feestructure.php">Fee Structure</a></li>
        <li><a href="timetable.php">Time Table</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a href="faqs.php">Faqs</a></li>
      </ul>
    </div>
    <div class="col-sm-3">
      <h6 class="pt-3 text-center">Communication Details:</h6>
      <hr>
      <p><i class="fa-solid fa-location-dot font-awesome-footer-icon"></i>Address: Pupri - Madhubani Rd, Baingra, Madhubani, Bihar 847211
        <br/>
        <i class="fa-solid fa-phone font-awesome-footer-icon"></i>
        <a href="tel:Phone: 06276 222 264" style="text-decoration: none; color:white">Phone: 06276 222 264</a>
        <br>
        <i class="fa-solid fa-envelope font-awesome-footer-icon"></i><a
        href="mailto:info@rkcollegemumbai.in" class="text-white" style="text-decoration: none; color:white">info@rkcollegemumbai.in</a>
      </p>
      <ul class="footer-social-icon">
        <li><a href="https://www.facebook.com/rkcmadhubani/" target="_blank"><i class="fa-brands fa-facebook" title="facebook"></i></a></li>
        <li><a href=""><i class="fa-brands fa-twitter" title="twitter"></i></a></li>
        <li><a href=""><i class="fa-brands fa-linkedin-in" title="linkedin"></i></a></li>
        <li><a href=""><i class="fa-brands fa-instagram" title="instagram"></i></a></li>
        <li><a href="https://groupsorlink.com/rk-college-whatsapp-group-link-study-material/" target="_blank"><i class="fa-brands fa-whatsapp" title="whatsapp"></i></a></li>
      </ul>
    </div>
    <div class="col-sm-4 pt-3">
      <h6 class="text-center">Our Location:</h6>
      <hr>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3574.991479378792!2d86.06153911396201!3d26.359137583369094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39edcd31ff92f44d%3A0x9b68ef8379f6fe87!2sR.K.%20College%20Madhubani!5e0!3m2!1sen!2sin!4v1661231402359!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" class="w-100 h-75" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
   </div>
    <div class="row slider-basicinfo py-3">
      <div class="col-sm-7 text-white">
        Copyright © 2022 All Rights Reserved.
      </div>
      <div class="col-sm-5 text-end pe-5"><a href="aks.php" style="text-decoration:none;" class="text-white">Design & Develop by Amit Kumar Sharma</a></div>
    </div>
   <!--footer end-->
    
  
    <!--main outer end-->
  </div>
</body>

</html>