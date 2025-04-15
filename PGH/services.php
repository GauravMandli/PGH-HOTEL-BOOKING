<?php
session_start();

include "connection.php";
$hotelId = $_GET['hotelId'];
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

              
               <?php 

$query="select * from hotels where hotelId=$hotelId";
$result = mysqli_query($con,$query);
$rec=mysqli_fetch_array($result);
?>

<!-- //w3l-header -->
<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">

            <h2> <?php echo $rec['hotelName'] ?> </h2>
           
        </div>
    </div>
</section>
<!--  services section -->
<section class="w3l-servicesblock1" id="service">
    <div class="features-with-17_sur py-5">
        <div class="container py-lg-5 py-sm-4">
            <div class="features-with-17-top_sur">
                <div class="row">
                    

  

              <div class="align-self col-lg-4 col-md-6">
                    <img src="<?php echo $rec['logo'] ?>" alt="" class="img-fluid">
                    <div class="info">
                        <h4><a href="#url"> <?php echo $rec['hotelName'] ?> </a></h4>
                       <b> <p><?php echo $rec['city'] ?> </p></B>
                        <p> <b>Contact :</b> <?php echo $rec['contactNo'] ?>  </p>
                        <p> <b>Address :</B> <?php echo $rec['address'] ?>  </p>
                    </div>
                </div>


                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-sm-5 mt-4">
                        <div class="features-with-17-right-tp_sur">
                            <div class="features-with-17-left1">
                                <span class="fa fa-beer" aria-hidden="true"></span>
                            </div>
                            <div class="features-with-17-left2">
                                <h5>Food & Drinks</h5>
                                <h6><a href="#url">Restaurant</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-sm-5 mt-4">
                        <div class="features-with-17-right-tp_sur">
                            <div class="features-with-17-left1">
                                <span class="fa fa-headphones" aria-hidden="true"></span>
                            </div>
                            <div class="features-with-17-left2">
                                <h5>Safe & Secure </h5>
                                <h6><a href="#url">Staff 24/7</a></h6>
                            </div>
                        </div>
                    </div>
                    

                    
                </div>
            </div>
        </div>
    </div>
</section>

<div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
<section class="w3l-feature-2">
    <div class="grid top-bottom py-5">
        <div class="container py-md-5">
            <h3 class="title-big text-center">Our Rooms are beautifully designed</h3>
            <div class="middle-section row mt-lg-5 pt-md-3">


             <?php 

$query="select * from rooms where hotelId=$hotelId";

$result = mysqli_query($con,$query);
while($recr=mysqli_fetch_array($result)){
?>

                <div class="three-grids-columns col-lg-4 col-md-6">
                    <img src="<?php echo $recr['roomImage'] ?>" alt="" class="img-fluid">
                    <div class="info">
                        <h4><a href="#url"> <?php echo $recr['roomType'] ?> </a></h4>
                        <p> <?php echo nl2br($recr['details']) ?></p>
                        <a href="room_book.php?roomId=<?php echo $recr['roomId'] ?>&hotelId=<?php echo $recr['hotelId'] ?>" class="btn mt-4">Book Now </a>
                    </div>
                </div>

  <?php } ?>

                

            </div>
        </div>
    </div>
</section>
</div>
</div>




<section class="w3l-feature-2">
    <div class="grid top-bottom py-5">
        <div class="container py-md-5">
            <h3 class="title-big text-center">Hotel Galleries</h3>
            <div class="middle-section row mt-lg-5 pt-md-3">


             <?php 

             
$query="select * from galleries where hotelId=$hotelId";

$result = mysqli_query($con,$query);
while($recg=mysqli_fetch_array($result)){
?>

                        
                <div class="three-grids-columns mt-4 col-lg-4 col-md-6">
                  <h3 class="title-small text-center" ><?php echo $recg['title'] ?></h3>
                    <img src="<?php echo $recg['imageURL'] ?>" alt="" class="img-fluid">
                </div>

  <?php } ?>



                

            </div>
        </div>
    </div>
</section>



<div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
<section class="w3l-feature-2">
    <div class="grid top-bottom py-5">


        <div class="container py-md-5">
            <h3 class="title-big text-center">Map</h3>
            
                <div class=" mt-4 col-lg-12 col-md-12-">
                  

                  <?php echo $rec['map'] ?>
                  
                </div>
</div>
</section>
</div>
</div>
                

            </div>
        </div>


  <?php include_once("footer.php");?>

 <!-- move top -->
 <button onclick="topFunction()" id="movetop" title="Go to top">
  &#10548;
</button>
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