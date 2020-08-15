		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
		<div class="row">
             <?php	
             
			$sql = "SELECT * FROM products where p_category='Main'";

			$result = mysqli_query($con, $sql);			
          if ($result):
            if(mysqli_num_rows($result)>0):
              while($product = mysqli_fetch_assoc($result)):
              ?>
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php echo $product['p_image']; ?>" alt="">
							</div>
							<div class="shop-body">
								<h3>New<br>Arrivals</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
						<?php
              endwhile;
            endif;
          endif;
       ?>
					
		</div>
		<!-- /row -->
    </div>
	<!-- /container -->
</div>
	