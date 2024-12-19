<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Healthycare Chatbot</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Responsive stylesheet  -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="shortcut icon" type="image/png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
 
<body>

    <div class="preloader"></div>

    <!-- Header navbar start -->
    <div class="header-topbar style-2">
        <div class="container padding-none">
            <div class="row">
                <div class="col-md-8 col-sm-6 welcome-top">
                    <ul class="list-inline top-icon">
                        <li><i class="fa fa-envelope"></i> mayaelmosalamy@gmail.com</li>
                        <li><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</li>
                    </ul>
                </div>
               
            </div>
        </div>
    </div>

    <div class="main-navbar conner-style style-2 position-fixed">
        <div class="container padding-none">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                          
                            <a class="navbar-brand dis-none" href="index.html"><img src="img/logo-black.png" alt="">
                                </a>
                            <a class="navbar-brand dis-block" href="index.html"><img src="img/logo-black.png" alt="">
                                </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations-delay="1.8s" data-animations="fadeInUp">
                            <ul class="nav navbar-nav bg-none navbar-right style-3">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Pages">Chatbot <i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span data-hover="Doctors">Make an Appointment <i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="team-col-3.html">Doctors style 1</a>
                                        </li>
                                        <li><a href="team-col-4.html">Doctors style 2</a>
                                        </li>
                                        <li><a href="team-details.html">Doctors details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="dropdown-buttons">
                                        <div class="btn-group menu-search-box">
                                            <a href="/login" class="btn dropdown-toggle" id="header-drop-3">Login</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="/signup" class="btn dropdown-toggle" id="header-drop-4"  >Sign Up</a>                                               
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header navbar end -->



    <!-- appointment start -->
    <section class=" animatedParent animateOnce">
        <div class="container padding-bottom-none">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <img class="animated fadeInLeftShort slow delay-500 booking-cantact-img" src="img/bg/c1.png" alt="">
                    </div>
                    <div class="col-md-6 bg-f8 padding-tb margin-bottom-80 animated fadeInRightShort slow delay-500">
                        <div class="booking-from">
                            <h2>Make An <span class="color-defult">Appointment</span></h2>
                            <div class="border-style-2 margin-bottom-30"></div>
                            <p class="margin-bottom-30">Book your appointments with your desired doctor. <br> All doctors are certified.</p>
                            <form method="post" action="/makeApp">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="fname" class="form-control" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="lname" class="form-control" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="subject" class="form-control" placeholder="Doctor" id="subject" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="Reservation" class="form-control" placeholder="Input Date" id="Reservation" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email Here" id="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" class="form-control" placeholder="Your Phone" id="phone" required>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-textarea">
                                            <textarea class="form-control" rows="6" placeholder="Wright Message" id="message" name="message" required></textarea>
                                            <button class="btn btn-theme" type="submit" value="Submit Form">Send Message</button>
                                        </div>
                                    </div>
                                    <div id="form-messages"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- appointment end -->



    <!-- Footer Style start -->
    <footer class="bg-faded">
        <div class="container">
            <div class="section-content">
                <div class="row margin-top-30">
                    <div class="col-md-3">
                      <div class="footer-item footer-widget-one">
                          <img alt="" src="img/logo.png" class="footer-logo">
                          <p>Voluptate porro esse repellat quo exercitationem debitis incidunt.</p>

                          <ul class="address">
                            <li><i class="pe-7s-call"></i>Phone: 001 (407) 901-6400</li>
                            <li><i class="pe-7s-mail"></i><a href="mailto:">Email: info@bdcoder.com</a></li>
                          </ul>
                          
                          <hr>
                          <ul class="social-icon bg-theme">
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                          </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="footer-item">
                        <div class="footer-title">
                          <h4>Our Peges </h4>
                          <div class="border-style-2"></div>
                        </div>
                        <ul class="footer-list border-deshed color-icon">
                          <li><i class="pe-7s-angle-right"></i><a href="#">About Us</a></li>
                          <li><i class="pe-7s-angle-right"></i><a href="#">Services</a></li>
                          <li><i class="pe-7s-angle-right"></i><a href="#">Gallery</a></li>
                          <li><i class="pe-7s-angle-right"></i><a href="#">Blog</a></li>
                          <li><i class="pe-7s-angle-right"></i><a href="#">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="footer-item">
                        <div class="footer-title">
                          <h4>Our Services </h4>
                          <div class="border-style-2"></div>
                        </div>
                        <ul class="footer-list border-deshed color-icon">
                          <li><i class="pe-7s-angle-right"></i><a href="#">Transplants</a></li>
                          <li><i class="pe-7s-angle-right"></i><a href="#">Gastroenterology</a></li>
                          <li><i class="pe-7s-angle-right"></i><a href="#">Orthopaedics</a></li>
                          <li><i class="pe-7s-angle-right"></i><a href="#">Spine Care</a></li>
                          <li><i class="pe-7s-angle-right"></i><a href="#">Cancer Care</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="footer-item">
                        <div class="footer-item clearfix">
                          <div class="footer-title">
                            <h4>Fliker Feed</h4>
                            <div class="border-style-1"></div>
                          </div>
                          <div class="flicker-feed gutter">
                            <a href="img/flicker/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="img/flicker/1.jpg" alt=""></a>
                            <a href="img/flicker/2.jpg" class="lightbox-image" title="Image Caption Here"><img src="img/flicker/2.jpg" alt=""></a>
                            <a href="img/flicker/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="img/flicker/3.jpg" alt=""></a>
                            <a href="img/flicker/4.jpg" class="lightbox-image" title="Image Caption Here"><img src="img/flicker/4.jpg" alt=""></a>
                            <a href="img/flicker/5.jpg" class="lightbox-image" title="Image Caption Here"><img src="img/flicker/5.jpg" alt=""></a>
                            <a href="img/flicker/6.jpg" class="lightbox-image" title="Image Caption Here"><img src="img/flicker/6.jpg" alt=""></a>
                            <a href="img/flicker/7.jpg" class="lightbox-image" title="Image Caption Here"><img src="img/flicker/7.jpg" alt=""></a>
                            <a href="img/flicker/8.jpg" class="lightbox-image" title="Image Caption Here"><img src="img/flicker/8.jpg" alt=""></a>
                            <a href="img/flicker/9.jpg" class="lightbox-image" title="Image Caption Here"><img src="img/flicker/9.jpg" alt=""></a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <section class="footer-copy-right bg-f9">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer Style End -->

  
    <a href="#" class="scrollup"><i class="pe-7s-up-arrow" aria-hidden="true"></i></a>
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- all plugins and JavaScript -->
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/css3-animate-it.js"></script>
    <script type="text/javascript" src="js/bootstrap-dropdownhover.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/gallery.js"></script>
    <script type="text/javascript" src="js/player.min.js"></script>
    <script type="text/javascript" src="js/retina.js"></script>
    <script type="text/javascript" src="js/comming-soon.js"></script>

    <!-- Main Custom JS -->
    <script type="text/javascript" src="js/script.js"></script>


</body>



</html>

