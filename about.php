<?php 
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
						<h3 class="breadcrumb-header">About Us</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li class="active">About Us</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
		
		<!-- Content Section -->
           <div class="section">
			<div class="container">
				<h3 class="text-center" style="margin-bottom:5%;">About JCT Motors Mombasa</h3>
				<div class="row">
                    <div class="col-md-7">
                      <p style="text-align:justify;font-size:18px;">
                      	 We are a leading import car company based in Mombasa. We deal with importation of cars from all corners of the world without any bias. We deal with our clients one on one in order to give them the best customer experience and also deliver within the time the exact order request.<br><br>

                      	 Order with us today. The experience is, magical!
                      </p>
                    </div>
                 <div class="col-md-5">
                 	<div class="images-pic">
                     <img src="images/about-1.jpg" style="border-radius:10px;float:right;">
                 </div>
                 </div>
				</div>
			</div>
		</div>
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
