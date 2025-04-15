<?php
session_start();

include "connection.php";
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

            <h2>BOOKING</h2>
            <p><a href="index.php">Home</a> &nbsp; / &nbsp; Book Now</p>

        </div>
    </div>
</section>
<section class="w3l-feature-2">
    <div class="grid top-bottom py-5">
        <div class="container py-md-5">
            <h3 class="title-big text-center">Please Select Your City And Hotel</h3>
            
            <p>
              
               <?php 
               echo "<a href='booking.php' class='ml-3 book btn btn-secondary btn-style'> All hotels  </a>  "; 

$query="select distinct city from hotels";
$resultCity = mysqli_query($con,$query);
while($recCity=mysqli_fetch_array($resultCity)){
        echo "<a href='booking.php?city=$recCity[0]' class='ml-3 book btn btn-secondary btn-style' >  " . $recCity[0]  . "</a>  "; 
}
    

?>

            </p>
            <div class="middle-section row mt-lg-5 pt-md-3">
              
               <?php 

$query="select * from hotels";

if(isset($_GET['city']))
{
  $city = $_GET['city'];
$query="select * from hotels where city='$city'";
}

$result = mysqli_query($con,$query);
while($rec=mysqli_fetch_array($result)){
?>

              <div class="three-grids-columns mb-5 col-lg-4 col-md-6">
                    <img src="<?php echo $rec['hotelImage'] ?>" alt="" style="height:300px;width:360px">
                    <div class="info">
                        <h4><a href="#url"> <?php echo $rec['hotelName'] ?> </a></h4>
                       <b> <p><?php echo $rec['city'] ?> </p></b> 
                        <p> <b>Contact : </b><?php echo $rec['contactNo'] ?>  </p>
                        <p> <b>Address :</b> <?php echo $rec['address'] ?>  </p>
                       <!-- <p> <b>About : </b><?php echo $rec['about'] ?>  </p>-->
                        <a href="services.php?hotelId=<?php print $rec['hotelId'] ?>" class="btn mt-4">Book Now </a>
                    </div>
                </div>
<?php } ?>

              
            </div>
        </div>
    </div>
</section>

<!--  services section -->
<section class="w3l-stats">
    <div class="main-w3 py-5">
        <div class="container py-lg-3">
            <div class="row align-items-center">
                <div class="col-md-6 title">
                    <h3 class="title-big">Our WebSite Facilities</h3>
                    <img src="logo/logo.png" alt="" class="img-fluid" style=height:400px;>
                </div>
                <div class="col-md-6 main-cont-wthree-fea text-center">
                    <div class="row">
                        <div class="col-6 pr-2 mt-4">
                            <div class="grids-speci1">
                                <span class="fa fa-television"></span>
                                <h3 class="title-spe">Booking</h3>
                                <p> Fastest Booking</p>
                            </div>
                        </div>
                       
                        
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
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