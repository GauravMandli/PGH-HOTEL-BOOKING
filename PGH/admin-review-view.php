<?php
include "connection.php";
//code to not see any user without admin id password
session_start();
if(!isset($_SESSION['adminId']))
{
  header("location:admin-login.php");
}
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

<?php include("amenu.php");?>
<!-- //w3l-header -->
<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>REVIEW</h2>
            <p><a href="admin-home.php">Home</a> &nbsp; / &nbsp; Review</p>

        </div>
    </div>
</section>
<!-- contact1 -->
<section class="w3l-contact-1 py-5">
    <div class="contacts-9 py-lg-5 py-sm-4">
        <div class="container">
            <div class="d-grid contact-view">
                <div class="">
                    <h3 class="title-big">REVIEW</h3>
                </div>
            </div>
            <div class="">
                
                <div class="map-content-9 mt-lg-0 mt-4">

                <table class="table">

                
                <tr>
                <td>Rev ID</td>
                <td>Hotel</td>
                <td>Rev Date</td>
                <td>Message</td>
                <td>Rate </td>
                <!-- <td>Action</td> -->
                <!-- <td>User ID</td> -->
                </tr>
                  
                <?php 

$query="select * from reviews";
$result = mysqli_query($con,$query);
while($rec=mysqli_fetch_array($result)){
?>
<tr>

<td> <?php echo $rec['revId'] ?> </td>
<td> <?php echo $rec['hotelId'] ?> </td>
<td> <?php echo $rec['revDate'] ?> </td>
<td> <?php echo $rec['message'] ?> </td>
<td> <?php echo $rec['rate'] ?> </td>
<!-- <td> <?php echo $rec['userId'] ?> </td> -->
<!-- <td><a href="admin-review-view.php?revId=<?php print $rec['revId']; ?>">DELETE</a> </td> -->


</tr>
<?php } ?>
                          

</table>
                  <div>
            </div>
        </div>
    </div>
</section>
<!-- /contact1 --><?php include_once("admin-footer.php");?>
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