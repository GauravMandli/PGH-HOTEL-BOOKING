<?php
include('connection.php');
session_start();

//code to not see any user without admin id password
//  if(!isset($_SESSION['user']))
//  {
//    header("location:login.php");
//  }
 ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PGH HOTEL BOOKING</title>
    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<!--w3l-header-->

<?php include_once("vmenu.php");?>
<!-- //w3l-header -->
<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">

            <h2>Thank You</h2>
            <p><a href="index.php">Home</a> &nbsp; / &nbsp; Thanks</p>

        </div>
    </div>
</section>
<div class="w3l-about-us best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <div class="maghny-gd-1">
            <div class="row about-text">
                <div class="col-lg-12">
<?php
if(isset($_SESSION['user']['userId']))
{

  $userId=$_SESSION['user']['userId'];
  $bookId=$_GET['bookId'];

  $query="select * from bookings where userId=$userId";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);

}
             ?>
                                       <h1 class="title-big text-center"><b>Your Booking Id Is :-<?php echo $_REQUEST["bookId"] ; ?></b> </h1><br><br><br><br>

                                       <h1 class="title-big text-center"><b>Your User Id Is :-<?php echo $row['userId']; ?></b> </h1><br><br><br><br>
                        <h1 class="title-big text-center"><b>Thankyou for Booking</b> </h1><br><br><br><br>

                       <a href="index.php" class="btn btn-primary " style="color:white;"> <h3>Click To Home Page </h3></a>

                </div>
                
            </div>
            
        </div>
    </div>
</div>



<section class="w3l-testimonials">
    <!-- main-slider -->
    <div class="testimonials py-5">
        <div class="container text-center py-lg-3">
            <div class="heading text-center mx-auto">
                <h3 class="title-big text-center">" WebSite's Owners "</h3>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="owl-testimonial owl-carousel owl-theme">
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="logo/group.jpg" class="img-fluid rounded" alt="client image">
                                </div>
                                <div class="message">Hiii,We are Owner Of This Website.Hope You Enjoy Our Website and Our Our User Friendly Interface</div>
                                <div class="name"><b>- Pratik <br>
                                  -Gaurav <br>
                                  -Honey<br></b>
                                </div>
                            </div>
                        </div>
                      
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main-slider -->
</section>
<?php include_once("footer.php");?>

<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->
</section>

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

<!-- script for owlcarousel -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for owlcarousel -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>


<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>