		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Deals of the day</h3>
							<div class="section-nav">
							</div>
						</div>
					</div>
					<!-- /section title -->
					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product 1 -->
										<?php				
										//$filter = isset($_POST['filter']) ? $_POST['filter'] : '';
										if(isset($_POST['filter']))
										{
											$filter = $_POST['filter'];
											$result = mysqli_query($con, "SELECT * FROM products where p_category like '%$filter%'");
						                    
										}
										else
										{
											$result = mysqli_query($con, "SELECT * FROM products where p_category='Deals of the Day'");
						                }
												
						          if ($result):
						            if(mysqli_num_rows($result)>0):
						              while($product = mysqli_fetch_assoc($result)):
						              ?>
										<div class="product">
											<div class="product-img">
												<img src="<?php echo $product['p_image']; ?>" alt="">
												<div class="product-label">
													<span class="new">HOT DEAL</span>
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $product['p_name']; ?></a></h3>
												<h4 class="product-price">Kshs.<?php echo $product['p_price']; ?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
											</div>
											<div class="add-to-cart">
											<form action="checkout.php?action=add&id=<?php echo $product['id']; ?>" method="POST">
											<fieldset>
											<input id="quantity" type="text" name="quantity" placeholder="Enter Quantity" autocomplete="off" />
											<input type="hidden" name="p_name" value="<?php echo $product['p_name']; ?>" />
											<input type="hidden" name="p_price" value="<?php echo $product['p_price']; ?>" />
											<input type="submit" name="add_to_cart" value="Add to Cart" class="add-to-cart-btn" />
											</fieldset>
										</form>
											</div>
										</div>
										<!-- /product 1 -->
										<?php
						              endwhile;
						            endif;
						          endif;
						       ?>
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>