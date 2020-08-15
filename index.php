<?php 
      
	  require('connect.php');
      require'includes/header.php';

?>
	<body>
           <!-- Top Header -->
          <?php require'includes/top-header.php';  ?>
       <!-- // Top Header -->

		<!-- NAVIGATION -->
          <?php require'includes/navigation.php';  ?>
		<!-- /NAVIGATION -->

		<!-- SECTION 1 -->
           <?php require'car-slides/section-1.php';  ?>
		<!-- /SECTION 1 -->

	    <!-- SECTION 2 -->
           <?php require'car-slides/section-2.php';  ?>
		<!-- /SECTION 2 -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">Hot Deal This Week</h2>
							<p>New Collection Arrivals</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION 3 -->
	       <?php require'car-slides/section-3.php';  ?>
		<!-- /SECTION 3 -->

		<!-- SECTION 4 -->
            <?php require'car-slides/section-4.php';  ?>
		<!-- /SECTION 4 -->

		<!-- NEWSLETTER -->
           <?php require'includes/newsletters.php';  ?>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
           <?php require'includes/footer.php';  ?>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
