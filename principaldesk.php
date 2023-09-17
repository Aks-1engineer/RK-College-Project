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
  <title> FROM THE PRINCIPAL DESK|| RK COLLEGE</title>
</head>

<body style="background-color:#eadaa8;">

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
          <li><a href=""><i class="fa-brands fa-instagram" title="instagram"></i></a></li>
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


     
    <!--marquee tag of welcome start-->
      <div class="row mt-3">
        <div class="col-sm-12 footer-color">
          <marquee behavior="" direction="">WELCOME TO RAM KRISHNA COLLEGE,MADHUBANI(BIHAR)</marquee>
        </div>
      </div>
    <!--marquee tag of welcome end-->
    <!--breadcrum start-->
      <div class="row breadcrum-outer">
        <div class="col-sm-12 breadcrum-inner text-white">
          <div class="my-div">
            <h3>FROM THE PRINCIPAL DESK</h3>
            <P>INDEX > FROM THE PRINCIPAL DESK</P>
          </div>
        </div>

      </div>
    <!--breadcrum end-->

    <!--from principal desk start-->
      <div class="row mt-3 bg-white">
        <div class="col-sm-12 text-center text-white footer-color"><h3>FROM THE PRINCIPAL DESK</h3></div>
        <div class="row">
            <div class="col-sm-4 pt-3">
                <img src="images/mentor/Dr-Phulo-Paswan-Principal-Sir-removebg-preview.png" class="w-100" style="border:1px solid #97322a;" alt="">
            </div>
            <div class="col-sm-8 ps-2 pt-2">
                <p>
                    Welcome to R.K. College- one of the largest constituent Colleges of Lalit Narayan Mithila University- a premier institution, with highly qualified academicians imparting education in arts, science and Commerce from Inter to PG level. The college enjoys a reputation for outstanding performance in academics, sports and extra-curricular activities.
                </p>
                
                <p>My sincere advice to all the admission seekers to the college is to be disciplined, honest, hardworking and sincere in their studies to reach the pinnacle of success. Our mission is to help our students to grow intellectually, personally and professionally so that they feel internally empowered and compelled to make significant positive contribution to the organizations they serve and to the Nation as a whole.</p>
                <p><h4>Rightly Einstein said “Genius is 1% talent and 99% hard work”</h4></p>
                <p>The college ensures complete development of the body the mind and the soul. According to Swami Vivekananda, “Any thing that makes you weak physically, intellectually and spiritually is to be rejected as poison” We have declared our campus “PAAN MASALA, GUTKA and TOBACCO FREE”. No one is allowed to use these banned items within our premises in case of violation, necessary action would be taken.</p>
                
                </div>

                <div class="row">
                    <div class="col-sm-12"> 
                    <p>While we take pride in the infrastructural facilities that we have succeeded in providing to our students in recent past, we always strive to do better. we are very much aware of the expectations that our students have from us. I personally assure you that we will do our utmost to make your stay in R.K. College a rewarding and memorable one.
                  I believe in non-close door-friendly and congenial atmosphere among all sections of R.K. College community</p>
                        <p>, be it the teaching Faculty the Non-Teaching Staff or the Students. All problems & issues are openly discussed and reached to a healthy solution.
                        As a leader of the institution, let me personally assure you all the my doors will always be open for suggestions from you or for solution to any problem that you may face during your stay in College. join us in our endeavors to strive towards excellence in all spheres of life with a promise to enhance further the reputation and glory of R.K. College, Madhubani.
                    </p>
                    <p> Wishing you all the success.</p> 
                            
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><b><p>
                            PROF. (DR) PHULO PASWAN <br>
                            Principal <br>
                            R.K.College, Madhubani <br>
                            Bihar <br>
                            06276-222264
                        </p></b></div>
                    </div>

                </div>
        </div>
      </div>

    <!--from principal desk end-->

  
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