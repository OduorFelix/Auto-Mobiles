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
			<li class="breadcrumb-item active" aria-current="page">About Us</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- about section -->
	<div class="inner-sec-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-6 about-img">
					<img class="img-fluid" src="images/IMG-20190306-WA0007.jpg" alt="">
				</div>
				<div class="col-lg-6 about-right mt-xl-5 mt-lg-3 mt-sm-5 mt-4 pt-lg-2">
					<h2 class="sub-tittle text-uppercase font-weight-bold" style="color:#cc4400;">About Us</h2>
					<h1 class="tittle mt-2">We Are The Best At Mini-Donuts In Kenya.</h1>
					<p class="mt-4 text-dark">Donut Thrillz Kenya offers fresh baked Mini-donuts. The donuts are perfect and yummy.Ingredients incorporated are wheat flour, sugar, eggs, margarine, raising agents and natural flavours.
					</p>
					<p class="mt-4 text-dark mt-1">
				    We offer baked mini donuts with oat meal and sugar free on pre orders for the health conscience customers.We got different flavours, mini donuts ganached with dark compound chocolate, and the white compound chocolate.
					</p>
					<a href="blog.html" class="btn button-style mt-sm-5 mt-4">Read More</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //about section -->


	<!-- testimonials -->
	<div class="testimonials text-center py-5" id="testi">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-w3 mb-5 text-white text-center font-weight-bold">Testimonials</h3>
			<div id="carouselExampleIndicators" class="carousel slide pb-5" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="w3_testimonials_grid">
							<img src="images/te1.jpg" alt=" " class="img-fluid rounded-circle" />
							<h5 class="mt-3 text-white">Thomas Carl - Sed do eiusmod</h5>
							<h4 class="mx-auto mt-4 text-light">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
								quo minus
								id quod possimus,
								omnis voluptas.
							</h4>
						</div>
					</div>
					<div class="carousel-item">
						<div class="w3_testimonials_grid">
							<img src="images/te2.jpg" alt=" " class="img-fluid rounded-circle" />
							<h5 class="mt-3 text-white">Petey Cruiser - Sed do eiusmod</h5>
							<h4 class="mx-auto mt-4 text-light">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
								quo minus
								id quod possimus,
								omnis voluptas.
							</h4>
						</div>
					</div>
					<div class="carousel-item">
						<div class="w3_testimonials_grid">
							<img src="images/te3.jpg" alt=" " class="img-fluid rounded-circle" />
							<h5 class="mt-3 text-white">Speed Wagon - Sed do eiusmod</h5>
							<h4 class="mx-auto mt-4 text-light">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
								quo minus
								id quod possimus,
								omnis voluptas.
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonials -->

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