
<?php
include "connection.php";
?>

<header class="w3l-header-nav">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				<img src="logo\logo.png" alt="Your logo" style="height:45px;" /> Hotels</a>
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
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item @@about__active">
						<a class="nav-link" href="about.php">About</a>
					</li>
					<!--<li class="nav-item @@services__active">
						<a class="nav-link" href="services.php">Services</a>-->
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
					
					
					<?php if(!isset($_SESSION['user']))
					{
						
					?>
					
					<li class="nav-item @@services__active">
						<a class="nav-link" href="register.php">Register</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="login.php">Login</a>
					</li>
					<?php } else {  ?>

					<li class="nav-item @@services__active">
						<a class="nav-link" href="#"><?php echo $_SESSION['user']['name'];?></a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="review.php">Review</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>

					

						<?php
						}
						?>
				</ul>
				<a href="booking.php" class="ml-3 book btn btn-secondary btn-style">Book Now</a>
			</div>
		</div>
	</nav>
	<!--//nav-->
</header>
