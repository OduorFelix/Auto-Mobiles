<?php
     session_start();
     
	 require('connect.php');

	 $mod="";
	 $rslt="";

	 if(isset($_POST['submit'])){
          $email=$_POST['email'];
          $password=md5($_POST['password']);

          $check_login=mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");
            if(mysqli_num_rows($check_login) == 1){
            	$run=mysqli_fetch_array($check_login);
                  $id=$run['id'];
                   $email=$run['email'];

              if($id == 1){
                 $_SESSION['email'] = $run['email'];
                 header('location:dashboard.php');
              }
               elseif ($id == 2) {
               	 $_SESSION['email'] = $run['email'];
                 header('location:dashboard.php');
               }
              else{
              	$mod="Email Address or Password Incorrect...";
              }
         }
         else{
                $mod="Email Address or Password Incorrect...";
            }
	 }

?>
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
						<h3 class="breadcrumb-header">Login Section</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li class="active">Login Section</li>
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
				<div class="row">
                    <div class="col-md-6 col-md-offset-3">
                     <!-- Material form login -->
						<div class="card">
						 <h3 class="card-title text-center" style="color:#D10024;">Sign In</h3>
		                 <label>
		                 	<font style="color:red;font-size:15px;text-align:center;">
						    <?php echo $mod;?>
						    </font>
						</label>
						  <!--Card content-->
						  <div class="card-body px-lg-5 pt-0">

						    <!-- Form -->
						    <form action=" " method="POST" class="text-center" style="color: #757575;">
						      <!-- Email -->
						      <div class="md-form">
						      	<label for="materialLoginFormEmail" style="color:black;">EmailAddress:</label>
						        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required="">
						        
						      </div>

						      <!-- Password -->
						      <div class="md-form">
						      	<label for="materialLoginFormPassword" style="color:black;">Password:</label>
						        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Email Address" required="">
						        
						      </div>
                               <br>
						      <!-- Sign in button -->
						      <button class="btn-link2" name="submit" type="submit">Sign in</button>
						      <br><br>
                              <div class="d-flex justify-content-around">
						        <div>
						          <!-- Forgot password -->
						          <a href="reset-password.php" class="reset">Forgot password? RESET</a>
						        </div>
						      </div>
						    </form>
						    <!-- Form -->

						  </div>

						</div>
						<!-- Material form login -->
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
