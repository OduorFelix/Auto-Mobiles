<?php 
      session_start();
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

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">HOT DEALS</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li class="active">HOT DEALS</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
		
		<!-- Content Section -->
             <?php require'car-slides/hot-deals.php';  ?>
		<!-- //Content Section -->

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
