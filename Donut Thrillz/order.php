<?php 
         
            require'includes/header.php';
?>

<body>
    <!-- header -->
     <?php require'includes/navigation.php';  ?>
	<!-- //header -->

	<!-- banner -->
	<div class="banner-w3ls-2">

	</div>
	<!-- //banner -->
	<!-- page details -->
	<div class="breadcrumb-agile">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Order Online</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- contact -->
	<div class="contact py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-w3 mb-sm-5 mb-4 text-dark text-center font-weight-bold">Order Online</h3>
			<p class="title-para text-center mx-auto mb-sm-5 mb-4" style="color:#cc4400;">Follow the steps below to make an order, we respond prompty.</p>
			<div class="row contact-form">
				<div class="col-lg-6 wthree-form-left">
					<!-- contact form -->
					<div class="contact-top1">
						<h1 class="mb-4 text-capitalize text-dark">Make An Order</h1>
						<form method="POST" action="order-action.php" class="contact-wthree">
							<div class="form-group d-flex">
								<label style="background-color:#cc4400;">
									<i class="fa fa-user" aria-hidden="true"></i>
								</label>
								<input class="form-control" type="text" placeholder="Enter your names..." name="names" id="names" required="">
							</div>
							<div class="form-group d-flex">
								<label style="background-color:#cc4400;">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</label>
								<input class="form-control" type="email" placeholder="Enter your email..." name="email" id="email" required="">
							</div>
							<div class="form-group d-flex">
								<label style="background-color:#cc4400;">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</label>
								<input class="form-control" type="text" placeholder="Enter your phone number..." name="phone" id="phone" required="">
							</div>
							<div class="form-group d-flex">
								<label style="background-color:#cc4400;">
									<i class="fa fa-edit"></i>
								</label>
							<select class="form-control" id="donut_type" name="donut_type" required="">
							<option value="Select">Select Donut Type</option>
				              <option value="Dark Chocolate">Dark Chocolate</option>
				              <option value="Dark Chocolate Sprinkled">Dark Chocolate Sprinkled</option>
				              <option value="White Chocolate">White Chocolate</option>
				              <option value="White Chocolate Sprinkled">White Chocolate Sprinkled</option>
				              <option value="Plain Donut">Plain Donut</option>
				              <option value="Assorted Variety">Assorted Variety</option>
				              <option value="Other types(On Pre-order)">Other types(On Pre-order)</option>
						</select>
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="5" id="message" name="message" placeholder="Your Request(s)" required></textarea>
							</div>
							<div class="d-flex  justify-content-end">
								<button type="submit" id="submit" name="submit" class="btn text-white btn-block w-25" style="background-color:#cc4400;">Submit</button>
							</div>
						</form>
					</div>
					<!--  //contact form -->
				</div>
				<!-- contact details -->
				<div class="col-lg-5 contact-bottom  mt-lg-5 d-flex flex-column contact-right-w3ls px-sm-0 px-2">
					<h3 class="mb-sm-2 mb-1 text-center font-weight-bold" style="color:#cc4400;">Delivery & Payment</h3>
					<h4 class="mb-sm-2 mb-1 font-weight-bold" >Delivery Cherges</h4>
					<p class="mb-sm-4 text-dark">We charge a fixed extra cost of <b>Ksh. 100.00</b> for deliveries within Nairobi Central Business District(CBD). </p>

					<h4 class="mb-sm-2 mb-4 font-weight-bold">Payment Method</h4>
					<p class="text-dark">We only accept payments via MPESA platform.Details below:<br>Use the following Till Number for payments <img src="images/lipa-mpesa final.jpg" width="60%"></p>
					
					
				</div>
			</div>
		</div>
	</div>
	<!-- //gallery -->
	<div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.365023810185!2d36.8011500190418!3d-1.2680358326600694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f173c0a1f9de7%3A0xad2c84df1f7f2ec8!2sWestlands%2C+Nairobi!5e0!3m2!1sen!2ske!4v1556109926784!5m2!1sen!2ske" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<!-- footer -->
     <?php require'includes/footer.php'; ?>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->
	<!-- dropdown smooth -->
	<script>
		$(document).ready(function () {
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
		</script>
	<!-- //dropdown smooth -->

	<!-- search plugin -->
	<!-- pop-up-box -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.magnific-popup.js"></script>
	<!-- //pop-up-box -->
	<!-- search script -->
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

		});
	</script>
	<!-- //search script -->
	<!-- //search plugin -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/inside.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //Js files -->


</body>

</html>