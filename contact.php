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
						<h3 class="breadcrumb-header">CONTACT US</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li class="active">CONTACT US</li>
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
		<!-- Section: Contact v.2 -->
					<section class="my-5">
					  <!-- Grid row -->
					  <div class="row">

					    <!-- Grid column -->
					    <div class="col-md-8 mb-md-0 mb-5">

					      <form method="POST" action="data_process.php">
					        <!-- Grid row -->
					        <div class="row">

					          <!-- Grid column -->
					          <div class="col-md-6">
					            <div class="md-form mb-0">
					              <label for="names" class="">Your Names</label>
					              <input type="text" name="names" id="forms" class="form-control" placeholder="Enter Your Names" required="">
					            </div>
					          </div>
					          <!-- Grid column -->

					          <!-- Grid column -->
					          <div class="col-md-6">
					            <div class="md-form mb-0">
					              <label for="email" class="">Your Email Address</label>
					              <input type="email" name="email" id="forms" class="form-control" placeholder="Enter Your Email Address" required="">
					            </div>
					          </div>
					          <!-- Grid column -->

					        </div>
					        <!-- Grid row -->

					        <!-- Grid row -->
					        <div class="row">

					          <!-- Grid column -->
					          <div class="col-md-12">
					            <div class="md-form mb-0">
					              <label for="subject" class="">Your Subject</label>
					              <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Your Subject" required=""> 
					            </div>
					          </div>
					          <!-- Grid column -->

					        </div>
					        <!-- Grid row -->

					        <!-- Grid row -->
					        <div class="row">

					          <!-- Grid column -->
					          <div class="col-md-12">
					            <div class="md-form">
					              <label for="contact-message">Your Message</label>
					              <textarea type="text" name="message" id="message" class="form-control md-textarea" rows="5" placeholder="Type Your Message Here" required=""></textarea>
					            </div>
					          </div>
					          <!-- Grid column -->

					        </div>
					        <!-- Grid row -->
                              <div class="text-center text-md-left" style="margin-top:4%;">
					        <input type="submit" id="send-mail" name="submit" value="Send Mail">
					      </div>
					      </form>

					    </div>
					    <!-- Grid column -->

					    <!-- Grid column -->
					    <div class="col-md-4 text-center" id="contact-links">
					      <ul class="list-unstyled mb-0" style="margin-top:14%;">
					        <li style="margin-bottom:10%;">
					          <i class="fa fa-map-marker fa-3x blue-text" style="color:#D10024;"></i>
					          <p style="margin-top:3%;"><strong>12345 - 0000, Mombasa, Kenya.</strong></p>
					        </li>
					        <li style="margin-bottom:10%;">
					          <i class="fa fa-phone fa-2x mt-4 blue-text" style="color:#D10024;"></i>
					          <p style="margin-top:3%;"><strong>+ 254 (0) 792 821 149</strong></p>
					          <p style="margin-top:3%;"><strong>+ 254 (0) 706 466 986</strong></p>
					        </li>
					        <li>
					          <i class="fa fa-envelope fa-2x mt-4 blue-text" style="color:#D10024;"></i>
					          <p class="mb-0" style="margin-top:3%;"><strong>info@jctmotorsmombasa.co.ke</strong></p>
					          <p class="mb-0" style="margin-top:3%;"><strong>support@jctmotorsmombasa.co.ke</strong></p>
					        </li>
					      </ul>
					    </div>
					    <!-- Grid column -->

					  </div>
					  <!-- Grid row -->

					</section>
					<!-- Section: Contact v.2 -->
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
