<?php
include("connection.php");
//After you have checked that the username is correct.
$username=$_SESSION['username'];


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Jinjang Utara Community Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/index.css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/flexslider.css" />
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]-->

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.custom.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });

});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });
});

</script>

</head>

<body class="home">
  <div class="container-fluid">
    <div class="row w">
      <div class="offset1 span5">
        <a href="index.php"><div class="logo"></div></a>
      </div>
      <div class="span8 navigation">
          <div class="navbar hidden-phone">


          <ul class="nav">
           <li class="dropdown active"><a href="index.php">Home</a></li>
           <li><a href="newjob.php">Post Job</a></li>
           <li><a href="viewjob.php">View Jobs</a></li>
           <li><a href="index.php">Log Out</a></li>
           <p><strong> &nbsp &nbsp &nbsp &nbsp
             &nbsp &nbsp &nbsp &nbsp
             &nbsp &nbsp &nbsp &nbsp
             &nbsp &nbsp &nbsp &nbsp
             &nbsp &nbsp &nbsp &nbsp
             Welcome, <?php echo $_SESSION['fullname'];?>!</strong></p>
          </ul>
          </div>

      </div>
    </div>
  </div>
    <div class="container">



    <div class="row headline"><!-- Begin Headline -->

     	<!-- Slider Carousel
        ================================================== -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><img src="images\kids.jpg" alt="slider" /></a></li>
                <li><img src="images\kids1.jpg" alt="slider" /></a></li>
              </ul>
            </div>
        </div>

        <!-- Headline Text
        ================================================== -->
        <div class="span4">
        	<h3>Welcome to Jinjang Utara Community Website. <br />
          </h3>
            <p class="lead">Bringing Hope to Jinjang Utara.</p>
            <p>Jinjang, KL – 2 December – The children (and parents) of Jinjang Utara with great delight descended upon Padang Taman Aman Putra where a massive Christmas and Back-to-school party was organised especially for them. Anticipation filled the sunny blue sky, as the children knew their hosts would not disappoint, but supply above and beyond their expectations.</p>
            <a href="#"><i class="icon-plus-sign"></i>Read More</a>
        </div>
    </div><!-- End Headline -->

    <div class="row gallery-row"><!-- Begin Gallery Row -->

    	<div class="span12">
            <h5 class="title-bg">Recent Work
                <small>That we are most proud of</small>
                <button class="btn btn-mini btn-inverse hidden-phone" type="button">View Portfolio</button>
            </h5>

        <!-- Gallery Thumbnails
        ================================================== -->

            <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">

                    <!-- Gallery Item 1 -->
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="images\handcraft1.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="images\handcraft1.jpg" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="images\handcraft1.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Handmade Bookmark</a>Purchase to assist childrens of Jinjang Utara.</span>
                    </li>

                    <!-- Gallery Item 2 -->
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="images\ball.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="images\ball.jpg" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="images\ball.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Rattan Balls</a>Purchase to assist childrens of Jinjang Utara.</span>
                    </li>

                    <!-- Gallery Item 3 -->
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="images\wristband.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="images\wristband.jpg" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="images\wristband.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Handmade Wristbands</a>Purchase to assist childrens of Jinjang Utara.</span>
                    </li>

                    <!-- Gallery Item 4 -->
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="images\pouch.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="images\pouch.jpg" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="images\pouch.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Handmade Pouch</a>Purchase to assist childrens of Jinjang Utara.</span>
                    </li>
                </ul>
                </div>
            </div>

    </div><!-- End Gallery Row -->

    <div class="row"><!-- Begin Bottom Section -->

    	<!-- Blog Preview
        ================================================== -->


    </div><!-- End Bottom Section -->

    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
        <footer class="footer-distributed">

          <div class="footer-left">

            <h3>Jinjang Utara Community Website</span></h3>

            <p class="footer-links">
              <a href="#">Blog</a>
              ·
              <a href="#">About</a>
              ·
              <a href="#">FAQ</a>
              ·
              <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">AGN &copy; 2015</p>
          </div>

          <div class="footer-center">

            <div>
              <i class="fa fa-map-marker"></i>
              <p><span>Jinjang Utara</span> 52000, Kuala Lumpur</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>03-2716 2000</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p><a href="mailto:support@jucw.com">support@jucw.com</a></p>
            </div>

          </div>

          <div class="footer-right">

            <p class="footer-company-about">
              <span>About the company</span>
               AGN strives to better the lives of the people within Jinjang Utara Community
            </p>

            <div class="footer-icons">

              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-github"></i></a>

            </div>

          </div>

        </footer>


    <!-- Scroll to Top -->
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>

</body>
</html>
