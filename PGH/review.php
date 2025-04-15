<?php
include "connection.php";

session_start();
if(!isset($_SESSION['user']))
{
  header("location:login.php");
}



if(isset($_POST['submit']))
{
  
  $hotelId =$_POST['hotelId'];
  $rate =  $_POST['rate'];
  $revDate =  $_POST['revDate'];
  $message =  $_POST['message'];
  $q="insert into reviews(hotelId,rate,revDate,message)values('$hotelId','$rate','$revDate','$message')";
  mysqli_query($con,$q);

 // print $q;
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
<?php include_once("vmenu.php");?>
<!-- //w3l-header -->
<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>REVIEW</h2>
            <p><a href="index.php">Home</a> &nbsp; / &nbsp; Review</p>

        </div>
    </div>
</section>
<!-- contact1 -->
<section class="w3l-contact-1 py-5">
    <div class="contacts-9 py-lg-5 py-sm-4">
        <div class="container">
            <div class="d-grid contact-view">
                <div class="cont-details">
                
                    <h3 class="title-big">Review</h3>
                </div>
               
            </div>
           
            
                <div class="map-content-9 mt-lg-0 mt-4">
                    <form action="" method="post">
                        <div class="twice-two">
                             <!-- <input type="text" class="form-control"  id="w3lSubject" placeholder="Room Type" required=""> -->
                             <select name="hotelId" class="form-control" id="">
                              <option value="" disabled selected >----Select Hotel-----</option>
                              <?php
                              $q = "select * from hotels";
                              $rs =mysqli_query($con,$q);
                              while ($row=mysqli_fetch_array($rs)) {
                              ?>
                              <option value="<?php print $row['hotelId']?>"><?php print $row['hotelName']?></option>
                              <?php } ?>
                            </select>

                             <input type="text" class="form-control" maxlength="1" name="rate" id="rate"
                                placeholder="Enter Rate 1 to 9" required="">
                        </div>
                        <div class="twice">
                        <input type="date" class="form-control" name="revDate" id="revDate"
                        placeholder="REVdate" required="">
                        </div>
                        <textarea class="form-control" placeholder="Message" name="message" id="message"
                            required=""></textarea>
                        <button type="submit" name="submit" class="btn btn-contact">Send Message</button>
                    </form>
                </div>



<br><br>
              
                

              


            </div>
        </div>
    </div>
</section>
<!-- /contact1 -->
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