<?php
	//$GLOBALS['result'];
	
	composeMail();
    
        function composeMail(){
            $contactname = $_POST['contactname'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
            $message .= "\r\n\r\n Phone Number: ";
            $message .= $phone;
            $subject = "Mail from <" . $_POST['contactname'] . "> via website";
            $headers = "From: ".$contactname." <".$_POST['useremail'].">"."\r\n";
            $headers .= "Reply-To: ".$contactname." <".$_POST['useremail'].">"."\r\n";
            $headers .= "Date: " . date("r")."\r\n";
    
            sendMail($subject, $message, $headers);
        }
    
        function sendMail($subject, $message, $headers){
            $to = "info@graduatesattire.com";
            $theSubject = $subject;
            $theheaders = $headers;
            $theMessage = $message;
            
            if(!(mail($to, $theSubject, $theMessage, $theheaders))){
                $GLOBALS['result'] = "Oops, we are currently unable to accept your submission.  Please try again later!";
            }else{
                $GLOBALS['result'] = "Thank you for your submission.  A message has been mailed to the administrators.\r\n \r\n We will be in contact shortly!";
            }
        }
?>

<html>
<head>
    <title>Contact | Graduates Attire</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
</head>
<body class="single-page contact-page">
<header class="site-header">
    <div class="top-header-bar">
        <div class="container">
            <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                    <div class="header-bar-email">
                        MAIL: <a href="#">contact@graduatesattire.com</a>
                    </div><!-- .header-bar-email -->

                    <div class="header-bar-text">
                        <p>PHONE: <span>+27 78 128 2185 / +27 82 731 5507 / +27 15 291 3316</span></p>
                    </div><!-- .header-bar-text -->
                </div><!-- .col -->

                <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                    <div class="donate-btn">
                        <a href="#">Get in touch</a>
                    </div><!-- .donate-btn -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .top-header-bar -->

    <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.html" rel="home" style="text-decoration:none;"><h1 class="newlogo"><strong class="logolaterF">Graduates</strong><strong class="logolaterS">Attire</strong></h1></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li class="current-menu-item"><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="booking.html">Booking</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
</header><!-- .site-header -->

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contact</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="contact-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="entry-content">
                        <h2>Get In touch with us</h2>
                        <p>
							<?php  //$GLOBALS['result']; 
								echo $GLOBALS['result'];
							?>
						</p>
						<div class="entry-content">
							<a href="index.html" class="btn gradient-bg"  >Return to Home Page</a>
							<a href="contact.html" class="btn gradient-bg">Send Another Message</a>
                        </div>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div>

    <footer class="site-footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="foot-about">
                        <h2><a class="foot-logo" href="#"><img src="images/foot-logo.png" alt=""></a></h2>

                        <p>For all your regalia needs, feel free to contact us here on our site, or reach out to us on our social media platforms below.</p>

                        <ul class="d-flex flex-wrap align-items-center">
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div><!-- .foot-about -->
                </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>

                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Our Services</a></li>
                        <li><a href="about.html">Testimonials</a></li>
                        <li><a href="booking.html">Booking</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span> +27 15 291 3316</span></li>
                                <li><i class="fa fa-envelope"></i><span>office@graduatesattire.com</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Shop No 23B, 61 Hans Van Runsburg street, Library Gardens, Polokwane 0699</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>