<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/imageedit-1-6226574230-256x256.png" type="image/x-icon">
    <meta name="description" content="IIT JAMMU's First Tech Fest">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/text.css">

    <link rel="stylesheet" href="assets/carousel/css/background.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <style>
        .logo_img{
            margin-top:5%;
            height: 65%; 
            width:auto;
        }
        .maintextindex{
            font-size:50px;
        }
        @media screen and (max-width: 600px) {
            .logo_img{
            margin-top:5%;
            height: 55%; 
            width:auto;
            }
            .maintextindex{
            font-size:30px;
            }
        }
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

        .w3-bar .w3-button {
        padding: 16px;
        }

        #particle{
        position: absolute;
        height: 100%;
        width:100%;
    }
  </style>

</head>

<body>
    <div class="w3-top" style="z-index:7;">
    <div class="w3-bar w3-black w3-card" id="myNavbar">
        <a href="index.php" class="w3-bar-item w3-button w3-wide">
            <img src="assets/images/mainpage_technunctus_s.png" style="height: 2rem;">
        </a>
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
        <a href="page4.php" class="w3-bar-item w3-button">HOSPITALITY</a>
        <a href="page1.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> EVENTS</a>
        <a href="page5.php" class="w3-bar-item w3-button"><i class="fa fa-handshake-o"></i> SPONSORS</a>
        <a href="page2.php" class="w3-bar-item w3-button"><i class="fa fa-phone"></i> CONTACT US</a>
        <a href="page7.php" class="w3-bar-item w3-button"><i class="fa fa-question-circle"></i> FAQ's </a>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars" style="z-index:10;"></i>
        </a>
    </div>
    </div>
    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-right w3-hide-medium w3-hide-large" style="z-index:7;right:0;width:60%;" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16"><i class="fa fa-arrow-right"></i></a>
        <a href="page4.php" onclick="w3_close()" class="w3-bar-item w3-button">HOSPITALITY</a>
        <a href="page1.php" onclick="w3_close()" class="w3-bar-item w3-button">EVENTS</a>
        <a href="page5.php" onclick="w3_close()" class="w3-bar-item w3-button">SPONSORS</a>
        <a href="page2.php" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT US</a>
        <a href="page7.php" onclick="w3_close()" class="w3-bar-item w3-button">FAQ's</a>   
    </nav>
    <!--<section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

        
        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top collapsed bg-color transparent">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo" style="z-index:4;">
                <div class="navbar-brand">-->
                    <!-- <span class="navbar-logo">
                        <a href="index.php">
                            <img src="assets/images/logoiit-1-328x154.jpg" alt="IIT JAMMU" title="" style="height: 8rem;">
                        </a>
                    </span> -->
                    
<!--
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="page4.php">
                            Hospitality</a>
                    </li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="page1.php">
                            Events</a></li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="page2.php">Contact US</a></li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="page5.php">
                            Sponsors</a>
                    </li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="page7.php" target="_blank">
                            FAQ's</a></li>
                </ul>

            </div>
        </nav>
    </section>-->
    <section class="cid-qTkA127IK8 mbr-fullscreen" id="header2-1" style="background-color: black">
        <div>
            <ul class="cb-slideshow" style="z-index:1;">
                <li><span>Image 01</span><div><!--<h3>text-1</h3>--></div></li>
                <li><span>Image 02</span><div><!--<h3>text-1</h3>--></div></li>
                <li><span>Image 03</span><div><!--<h3>text-1</h3>--></div></li>
                <li><span>Image 04</span><div><!--<h3>text-1</h3>--></div></li>
                <li><span>Image 05</span><div><!--<h3>text-1</h3>--></div></li>
                <li><span>Image 06</span><div><!--<h3>text-1</h3>--></div></li>
            </ul>
        </div>
        <div class="mbr-overlay" style="z-index:2; opacity: 0; background-color: rgb(118, 118, 118);"></div>
        <div id="particle" style="z-index:5"></div>

        <div class="container align-center" style="z-index:4;">
            <div class="row justify-content-md-center">
                <div class="mbr-white col-md-10">
                    <img src="assets/images/technunctus_logo.png" alt="logo" class="logo_img">
                    <div style="font-size:0.9em" class="mbr-bold mbr-fonts-style display-1">
                        <h2 class="maintextindex">
                   <!-- <h2 class="align-left mbr-bold mbr-fonts-style display-2">BROCHURE</h2> -->
                            <span>T</span>
                            <span>E</span>
                            <span>C</span>
                            <span>H</span>
                            <span>N</span>
                            <span>U</span>
                            <span>N</span>
                            <span>C</span>
                            <span>T</span>
                            <span>U</span>
                            <span>S</span>
                            <br>
                            <span>2</span>
                            <span>0</span>
                            <span>2</span>
                            <span>0</span>
                        </h2>
                    </div>
                </div>
            </div> 
        </div> 
<!--         
        <div class="text_glowing align-center">
        <h2>
        <span>T</span>
        <span>E</span>
        <span>C</span>
        <span>H</span>
        <span>N</span>
        <span>U</span>
        <span>N</span>
        <span>C</span>
        <span>T</span>
        <span>U</span>
        <span>S</span>
    </h2>
        </div> -->


        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#next">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>
    </section>

    <section class="mbr-section content5 cid-rfNAVCRBb1" id="content5-1d" >





        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8" style="z-index:4;">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><div style="font-weight: normal;">
                            About Us</div></h2>



                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section article content10 cid-rk3p65RR5b" id="content10-2x">
        <div class="container" style="z-index:4;">
            <div class="inner-container" style="width: 71%;" >
                <hr class="line" style="width: 25%;">
                <div class="section-text align-center mbr-white mbr-fonts-style display-5">
                    <p>Road to Renaissance</p> 
                    <p>Pack up your bags and fasten your seatbelts for a two-day technical extravaganza wherein IIT Jammu presents you Technunctus’20, the second edition of the annual technical fest of IIT Jammu, which will be no less than a nostalgic euphoria of engineering innovations and technological ideas. Technunctus brings you a platform to promulgate your skills and reach the pinnacle of your talents.  </P>
                    <p>Technunctus’19 was a huge success with an unprecedented amount of participation. This time we bring you the theme “Road to Renaissance” to promote newer ideas and innovations. So, mark your calendars on 13th-14th March 2020 for an experience like never-before.</p>
                </div>
                <hr class="line" style="width: 25%;">
            </div>
        </div>
    </section>
    <a href="page1.php"> <div class="earth_small"></div> </a>
    <section class="services3 cid-rk3bmgppQW" id="services3-2q">
        <!---->

        <!---->
        <!--Overlay-->
        
    <section class="cid-rfAGybaASQ">
        <!--<div class="container" style="z-index:4;">
            <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-1"><strong>
                    Countdown
                </strong></h2>
        </div>
        <div class="container pt-5 mt-2" style="z-index:4;">
            <div class=" countdown-cont align-center p-4">
                <div class="event-name align-left mbr-white ">
                    <h4 class="mbr-fonts-style display-5">We will see you soon in</h4>
                </div>
                <div class="countdown align-center py-2" data-due-date="2019/03/23">
                </div>
                <div class="daysCountdown" title="Days"></div>
                <div class="hoursCountdown" title="Hours"></div>
                <div class="minutesCountdown" title="Minutes"></div>
                <div class="secondsCountdown" title="Seconds"></div>
            </div>
            <div class="media-container-row pt-5">
                <div class="mbr-section-btn align-center"><a class="btn btn-black display-4" href="page1.php"><span
                            class="mbrib-cash mbr-iconfont mbr-iconfont-btn" style="color: rgb(255, 255, 255);"></span>Get
                        your Tickets Here</a></div>
            </div>
        </div>
        <div class="container" style="z-index:4;">
            <div class="video-responsive">
                <iframe width="420" height="315" src="https://www.youtube.com/embed/9PTIAAR5qjc" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>-->
        
    </section>
    


    

    <section once="" class="cid-rfk0u7XjhZ" id="footer7-5">
       
        <div class="container" style="z-index:4;">
        <hr>
            <div class="media-container-row align-center">
                <div class="row social-row">
                    <div class="social-list align-right pb-2">
                        <div class="soc-item">
                            <a href="https://www.facebook.com/TechnunctusIITJammu/" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.instagram.com/technunctus/?hl=en" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row row-copirayt">
                    <p class="mbr-text mb-0 mbr-fonts-style align-center display-7" style="color:white;text-shadow: 2px 2px 4px #000000;">
                    <img src="assets/images/iit-jammu-logo-white.png" style="height: 5rem;"><br><br>   
                    © Copyright 2020 IIT JAMMU - All Rights Reserved
                    </p>
                    
                </div>
            </div>
        </div>
    </section>
    <script src="assets/theme/js/type.js"></script>
    <script src="assets/theme/js/particles.js"></script>
    <script src="assets/theme/js/app2.js"></script>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
    <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
    <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
    <script src="assets/countdown/jquery.countdown.min.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/theme/js/script.js"></script>

    <script src="assets/navbar/js/sidebar.js"></script>

    <input name="animation" type="hidden">
    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
</body>

</html>
