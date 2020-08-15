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
			<li class="breadcrumb-item active" aria-current="page">Our Menu</li>
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
					<h2 class="sub-tittle text-uppercase font-weight-bold" style="color:#cc4400;">Our Menu</h2>
					<h1 class="tittle mt-2">We Are The Best At Mini-Donuts In Kenya.</h1>
					<p class="mt-4 text-dark">Donut Thrillz Kenya offers fresh baked Mini-donuts. Baked from a secret receipe which include ingridients such as <b>wheat flour, sugar, eggs, magarine, natural flavours and a "chef special" ingridient</b>.
					</p>
					<p class="mt-4 text-dark mt-1">
				    Our chefs have not left out our health sensitive brothers and sisters. We bake on pre-order gluten free mini donuts which are as delicious as our signature product.
					</p>
					<a href="order.php" class="btn button-style mt-sm-5 mt-4">Order Online Now</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //about section -->

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