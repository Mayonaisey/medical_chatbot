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
                        <li><i class="fa fa-envelope"></i>Admin: mayaelmosalamy@gmail.com</li>
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
                                    <a href="/chatbot" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Pages">Chatbot <i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="/app"  target="_blank" role="button" aria-haspopup="true" aria-expanded="false"> <span data-hover="Doctors">Make an Appointment <i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
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

    <!-- Start  bootstrap-touch-slider Slider -->
    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Third Slide -->
            <div class="item active">
                <!-- Slide Background -->
                <img src="img/bg/3.jpg" alt="Slider Images"  class="slide-image"/>
                <div class="bs-slider-overlay"></div>

                <div class="slide-text slide_style_left">
                    <h1 data-animation="animated fadeInRight">The <span class="color-defult"> HealthyCare </span>Chatbot</h1>
                    <p data-animation="animated fadeInLeft">Our team of over 500 doctors join us in giving you the best <br>modern healthcare to ensure you stay healthy, always.</p>
                    <a href="/chatbot"  class="btn btn-default" data-animation="animated fadeInLeft">Ask Chatbot</a>
                    <a href="/app" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">Book Now</a>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">            
                <!-- Slide Background -->
                <img src="img/bg/2.jpg" alt="Slider Images" class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_center">
                    <h1 data-animation="animated bounceInDown"> Treat<span class="color-defult"> heart</span> disease.</h1><br>
                    <a href="/chatbot" class="btn btn-default" data-animation="animated fadeInUp">Ask Chatbot Now</a>
                    <a href="/app" target="_blank"  class="btn btn-primary" data-animation="animated fadeInDown">Book Now</a>
                </div>
            </div>
            <!-- End of Slide -->
            
            <!-- Third Slide -->
            <div class="item">            
                <!-- Slide Background -->
                <img src="img/bg/1.jpg" alt="Slider Images"  class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_right">
                    <h1 data-animation="animated fadeInLeft">Life Wellness<span class="color-defult"> Programs</span></h1>
                    <p data-animation="animated fadeInRight">Stay in touch and in shape with periodic tips from our <br>in-house  experts on wellness, fitness and nutrition.</p>
                </div>
            </div>
            <!-- End of Slide -->
        </div><!-- End of Wrapper For Slides -->

        <!-- Left Control -->
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div> <!-- End  bootstrap-touch-slider Slider -->

    <!-- divider start -->
    <section class="about-3col animatedParent animateOnce">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="about-feature style-2">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="appointment-item">
                                <i class="flaticon-ribbon"></i>
                                <h5><a href="#">Our Doctors</a></h5>
                                <div class="line-border-center bg-gray margin-bottom-20"></div>
                                <p>Choose by name, specialty, city and more.</p>
                                <button class="btn btn-theme btn-sm">Find a Doctor <i class="pe-7s-angle-right"></i></button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="appointment-item">
                                <i class="flaticon-cardiogram"></i>
                                <h5><a href="/chatbot">Our AI Chatbot</a></h5>
                                <div class="line-border-center bg-gray margin-bottom-20"></div>
                                <p>Answers all your concerning questions and more.</p>
                                <a href="/chatbot"><button class="btn btn-theme btn-sm">HealthyCare  <i class="pe-7s-angle-right"></i></button></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 center-block">
                            <div class="appointment-item">
                                <i class="flaticon-first-aid-kit"></i>
                                <h5><a href="/app">Appointments</a></h5>
                                <div class="line-border-center bg-gray margin-bottom-20"></div>
                                <p>Click in, walk in or call us today.</p>
                                <a href="/app"><button class="btn btn-theme btn-sm">Get Appointment <i class="pe-7s-angle-right"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider end -->

    <!-- welcome start -->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7">
                        <h2>Why choose us</h2>
                        <h3 class="color-defult">Get a world class Health service now</h3>
                        <p class="lead">HealthyCare Chatbot is here for you. Call <span class="ff-p">+00 999 3030</span></p>
                        <div class="row margin-top-20">
                            <div class="col-md-6">
                                <img class="margin-top-10" src="img/services/s1.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <p>The best <span class="color-defult fw-b">HealthyCare Chatbot</span> you'll find. Search your symptoms and find out what they could imply. You can also book an appointment through our website with your desired doctor.</p>
                            </div>
                        </div>
                        <div class="clearfix margin-top-20 margin-right-10"> 
                            <div class="skills" data-percent="85%">
                                <div class="title-bar">
                                  <h5>Doctors</h5>
                                </div>
                                <span>85%</span>
                                <div class="skillbar-1"></div>  
                            </div>
                            <div class="skills" data-percent="60%">
                                <div class="title-bar">
                                  <h5>Patients</h5>
                                </div>
                                <span>60%</span>
                                <div class="skillbar-2"></div>  
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <div>
                           <img alt="" src="img/services/w1.jpg"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- welcome end -->
   <!-- divider start -->
    <section class="service-area over-layer-default" style="background-image:url(img/bg/5.jpg);">
        <div class="container padding-bottom-none padding-top-40">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="service-item style-1 text-white border-right">
                            <div class="service-icon">
                                <i class="pe-7s-call"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Give us a Call</a></h5>
                                <p>+970-438-3258</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="service-item style-1 text-white border-right">
                            <div class="">
                                <i class="pe-7s-mail-open"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Send us a Message</a></h5>
                                <p>mayaelmosalamy@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="service-item style-1 text-white">
                            <div class="">
                                <i class="pe-7s-map-marker"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Visit our Location</a></h5>
                                <p>12 Obour, Cairo </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider end -->

   <!-- divider start -->
    <section class="divider divider-video over-layer-white" style="background-image:url(img/bg/6.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="https://youtu.be/vX-lG9nb1fU" data-fancybox-group="gallery" class="lightbox-image" title="lightbox view"><i class="icon icon-Play"></i></a>    
                </div> 
            </div> 
        </div> 
    </section>
    <!-- divider end -->

    <!-- department start -->    
    <section class="bg-f8">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="text-center">
                            <h2>OUR <span class="color-defult"> DEPARTMENTS</span></h2>
                            <div class="line-border-center bg-defult"></div>
                            <p>Our healthcare system depends on the most professional prodigies in their fields. Take a look at our available departments.</p>
                        </div>
                    </div>
                </div> 
            </div>
            
            <div class="section-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img/services/4.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#">Medical evacuation</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img/services/5.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> Physical examination</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img/services/6.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> Ultrasound Endoscopy</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img/services/1.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> Radiology / X-Ray</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img/services/8.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> CRITICAL CARE</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="practice-item-1">
                            <div class="practice-img">
                                <a href="#">
                                    <img src="img/services/3.jpg" alt="">
                                    <span class="flaticon-heart-1"></span>
                                </a>
                            </div>
                            <div class="practice-content">
                                <h4><a href="#"> Safe & Secure</a></h4>
                                <p>Personal Health Record makes it easy to join and stay on a wellness program - lose weight or manage a chronic condition easily.</p>
                                <a href="#" class="btn-theme hvr-bounce-to-top"> Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- department end -->

    <!-- Team start -->
    <section class="team-area">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2><span class="color-defult">Experienced</span> Doctor</h2>
                        <div class="line-border-center bg-defult"></div>
                        <p>Repellendus error placeat numquam doloribus perferendis consequatur maxime molestiae soluta Corporis quidem quaerat accusantium omnis repudiandae nulla recusandae</p>
                    </div>
                </div>
            </div>

            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            /////                                                                                                                ////
            /////       HERE WE SHOULD FETCH DATE AND TIME AND PICTURE AND NAME OF EACH DOCTOR AND DISPLAY USING A FOR LOOP      ////
            /////                                                                                                                ////
            /////                                                                                                                ////
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
            <div class="section-content">
                <div class="row">
                    <div class="team-carousel">
                        <div class="item">
                            <div class="team-item-2">
                                <img src="img/team/1.png" alt="">
                                <div class="team-contact">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h4><a href="#">Dr. Mokles Beller</a></h4>
                                    <h6>Cardiologists</h6>
                                    <div class="team-content-icon">
                                        <i class="flaticon-heart"></i>
                                    </div>
                                </div>
                                <div class="timetable">
                                    <div class="item">
                                        <div class="label">Monday-Friday</div>
                                        <div class="value">08:00 - 17:00</div>
                                    </div>
                                    <div class="item">
                                        <div class="label">Saturday</div>
                                        <div class="value">10:00 - 16:00</div>
                                    </div>
                                    <div class="item">
                                        <div class="label">Sunday</div>
                                        <div class="value">12:00 - 14:00</div>
                                    </div>
                                    <a href="#" class="btn-theme text-center btn-block"> View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-item-2">
                                <img src="img/team/2.png" alt="">
                                <div class="team-contact">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h4><a href="#">Dr. George Beller</a></h4>
                                    <h6>Cardiologists</h6>
                                    <div class="team-content-icon">
                                        <i class="flaticon-heart"></i>
                                    </div>
                                </div>
                                <div class="timetable">
                                    <div class="item">
                                        <div class="label">Monday-Friday</div>
                                        <div class="value">08:00 - 17:00</div>
                                    </div>
                                    <div class="item">
                                        <div class="label">Saturday</div>
                                        <div class="value">10:00 - 16:00</div>
                                    </div>
                                    <div class="item">
                                        <div class="label">Sunday</div>
                                        <div class="value">12:00 - 14:00</div>
                                    </div>
                                    <a href="#" class="btn-theme text-center btn-block"> View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-item-2">
                                <img src="img/team/3.png" alt="">
                                <div class="team-contact">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h4><a href="#">Dr. George Beller</a></h4>
                                    <h6>Cardiologists</h6>
                                    <div class="team-content-icon">
                                        <i class="flaticon-heart"></i>
                                    </div>
                                </div>
                                <div class="timetable">
                                    <div class="item">
                                        <div class="label">Monday-Friday</div>
                                        <div class="value">08:00 - 17:00</div>
                                    </div>
                                    <div class="item">
                                        <div class="label">Saturday</div>
                                        <div class="value">10:00 - 16:00</div>
                                    </div>
                                    <div class="item">
                                        <div class="label">Sunday</div>
                                        <div class="value">12:00 - 14:00</div>
                                    </div>
                                    <a href="#" class="btn-theme text-center btn-block"> View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-item-2">
                                <img src="img/team/4.png" alt="">
                                <div class="team-contact">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h4><a href="#">Dr. George Beller</a></h4>
                                    <h6>Cardiologists</h6>
                                    <div class="team-content-icon">
                                        <i class="flaticon-heart"></i>
                                    </div>
                                </div>
                                <div class="timetable">
                                    <div class="item">
                                        <div class="label">Monday-Friday</div>
                                        <div class="value">08:00 - 17:00</div>
                                    </div>
                                    <div class="item">
                                        <div class="label">Saturday</div>
                                        <div class="value">10:00 - 16:00</div>
                                    </div>
                                    <div class="item">
                                        <div class="label">Sunday</div>
                                        <div class="value">12:00 - 14:00</div>
                                    </div>
                                    <a href="#" class="btn-theme text-center btn-block"> View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-item-2">
                                <img src="img/team/5.png" alt="">
                                <div class="team-contact">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h4><a href="#">Dr. George Beller</a></h4>
                                    <h6>Cardiologists</h6>
                                    <div class="team-content-icon">
                                        <i class="flaticon-heart"></i>
                                    </div>
                                </div>
                                <div class="timetable">
                                    <div class="item">
                                        <div class="label">Monday-Friday</div>
                                        <div class="value">08:00 - 17:00</div>
                                    </div>
                                    <div class="item">
                                        <div class="label">Saturday</div>
                                        <div class="value">10:00 - 16:00</div>
                                    </div>
                                    <div class="item">
                                        <div class="label">Sunday</div>
                                        <div class="value">12:00 - 14:00</div>
                                    </div>
                                    <a href="#" class="btn-theme text-center btn-block"> View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-item-2">
                                <img src="img/team/3.png" alt="">
                                <div class="team-contact">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h4><a href="#">Dr. George Beller</a></h4>
                                    <h6>Cardiologists</h6>
                                    <div class="team-content-icon">
                                        <i class="flaticon-heart"></i>
                                    </div>
                                </div>
                                <div class="timetable">
                                    <div class="item">
                                        <div class="label">Monday-Friday</div>
                                        <div class="value">08:00 - 17:00</div>
                                    </div>
                                    <div class="item">
                                        <div class="label">Saturday</div>
                                        <div class="value">10:00 - 16:00</div>
                                    </div>
                                    <div class="item">
                                        <div class="label">Sunday</div>
                                        <div class="value">12:00 - 14:00</div>
                                    </div>
                                    <a href="#" class="btn-theme text-center btn-block"> View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            /////                                                                                                                ////
            /////                                                 till here                                                      ////
            /////                                                                                                                ////
            /////                                                                                                                ////
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <!-- Team end -->

    <!-- Counter start -->
    <section class="funfact-field over-layer-default" style="background-image: url('img/bg/6.jpg')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col text-center">
                        <i class="flaticon-heart"></i>
                        <div class="count">
                            <div class="start-count">25</div>
                            <h4>Heart Transplants</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col text-center">
                        <i class="flaticon-human-lungs"></i>
                        <div class="count">
                            <div class="start-count">979</div>
                            <h4>BARIATRIC SURGERY</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col text-center">
                        <i class="flaticon-kidney"></i>
                        <div class="count">
                            <div class="start-count">5264</div>
                            <h4>CRITICAL CARE</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col text-center">
                        <i class="flaticon-first-aid-kit"></i>
                        <div class="count">
                            <div class="start-count border-none">119</div>
                            <h4>EXTPART Doctor</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter end -->

    <!-- Testimonial start -->
    <section class="testimonial">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2>Our <span class="color-defult"> Clients</span> Say</h2>
                        <div class="line-border-center bg-defult"></div>
                        <p>Repellendus error placeat numquam doloribus perferendis consequatur maxime molestiae soluta Corporis quidem quaerat accusantium omnis repudiandae nulla recusandae</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="testimonial-carousel-one">
                            <div class="item">
                                <div class="testimonial-item text-center">
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <img class="img-responsive" src="img/testimonial/1.png" alt="" />
                                        </div>
                                        <h4>John Daniel</h4>
                                        <h6>business man</h6>
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <p>consectetur adipisicing elit. Nemo ex doloremque maiores quas, cumque commodi eaque molestiae in ratione nam obcaecati nihil provident illum eius sed ullam amet, expedita molestias iusto.</p> 
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-item text-center">
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <img class="img-responsive" src="img/testimonial/2.png" alt="" />
                                        </div>
                                        <h4>John Daniel</h4>
                                        <h6>business man</h6>
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <p>consectetur adipisicing elit. Nemo ex doloremque maiores quas, cumque commodi eaque molestiae in ratione nam obcaecati nihil provident illum eius sed ullam amet, expedita molestias iusto.</p> 
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-item text-center">
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <img class="img-responsive" src="img/testimonial/3.png" alt="" />
                                        </div>
                                        <h4>John Daniel</h4>
                                        <h6>business man</h6>
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <p>consectetur adipisicing elit. Nemo ex doloremque maiores quas, cumque commodi eaque molestiae in ratione nam obcaecati nihil provident illum eius sed ullam amet, expedita molestias iusto.</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial end -->

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

