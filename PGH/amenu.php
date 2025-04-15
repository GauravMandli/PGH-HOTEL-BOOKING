
<?php
include "connection.php";

?>


<header class="w3l-header-nav">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				<img src="logo/logo.png" alt="Your logo" style="height:45px;" /> Hotels</a>
			<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item @@home__active">
						<a class="nav-link" href="admin-home.php">Home</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="admin-user-view.php">User</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="admin-hotel-view.php">Hotel</a>
					</li>
					<li class="nav-item @@about__active">
						<a class="nav-link" href="admin-gallery-view.php">Gallery</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="admin-room-view.php">Room</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="admin-booking-view.php">Booking</a>
					</li>
					
					<li class="nav-item @@services__active">
						<a class="nav-link" href="admin-review-view.php">Review</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="admin-contact-view.php">Contact</a>
					</li>
				
						<li class="nav-item @@services__active">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				
				</ul>

				<!--<a href="booking.php" class="ml-3 book btn btn-secondary btn-style">Book Now</a>-->
			</div>
		</div>
	</nav>
	<!--//nav-->
</header>
