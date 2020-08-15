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
			<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- contact -->
	<div class="contact py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-w3 mb-sm-5 mb-4 text-dark text-center font-weight-bold">Contact Us</h3>
			<p class="title-para text-center mx-auto mb-sm-5 mb-4" style="color:#cc4400;">Customer Satisfaction is key, we respond to your inquiries as fast as possible. Reach us below:</p>
			<div class="row contact-form">
				<div class="col-lg-6 wthree-form-left">
					<!-- contact form -->
					<div class="contact-top1">
						<h1 class="mb-4 text-capitalize text-dark">Get In Touch</h1>
						<form action="#" method="POST" class="contact-wthree">
							<div class="form-group d-flex">
								<label style="background-color:#cc4400;">
									<i class="fa fa-user" aria-hidden="true"></i>
								</label>
								<input class="form-control" type="email" placeholder="Enter your names..." name="email" required="">
							</div>
							<div class="form-group d-flex">
								<label style="background-color:#cc4400;">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</label>
								<input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
							</div>
							<div class="form-group d-flex">
								<label style="background-color:#cc4400;">
									<i class="fa fa-edit"></i>
								</label>
								<input class="form-control" type="text" placeholder="Subject" name="email" required="">
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="5" id="contactcomment" placeholder="Your message" required></textarea>
							</div>
							<div class="d-flex  justify-content-end">
								<button type="submit" class="btn text-white btn-block w-25" style="background-color:#cc4400;">Submit</button>
							</div>
						</form>
					</div>
					<!--  //contact form -->
				</div>
				<!-- contact details -->
				<div class="col-lg-5 contact-bottom  mt-lg-5 d-flex flex-column contact-right-w3ls px-sm-0 px-2">
					<div class="fv3-contact mt-lg-5">
						<span class="fa fa-envelope mr-2 mt-4" style="background-color:#cc4400;"></span>
						<p>
							<a href="mailto:info@donutthrillz.com" class="text-dark">info@donutthrillz.com</a><br>
							<a href="mailto:donutthrillzke@gmail.com" class="text-dark">donutthrillzke@gmail.com</a><br>

						</p>
					</div>
					<div class="fv3-contact my-4">
						<span class="fa fa-phone mr-2" style="background-color:#cc4400;"></span>
						<p class="text-dark">+254 720 720 494 <br>
						                     +254 711 223 717<br>
						                     +254 773 134 588 </p>
					</div>
					<div class="fv3-contact">
						<span class="fa fa-home mr-2" style="background-color:#cc4400;"></span>
						<h2 class="text-dark">Location Coming Soon in Westlands.</h2>
					</div>
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