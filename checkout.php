<?php
     session_start();
     
      require('connect.php');

     $product_ids = array();

     //session_destroy();

if (! function_exists('array_column')) {
    function array_column(array $input, $columnKey, $indexKey = null) {
        $array = array();
        foreach ($input as $value) {
            if ( !array_key_exists($columnKey, $value)) {
                trigger_error("Key \"$columnKey\" does not exist in array");
                return false;
            }
            if (is_null($indexKey)) {
                $array[] = $value[$columnKey];
            }
            else {
                if ( !array_key_exists($indexKey, $value)) {
                    trigger_error("Key \"$indexKey\" does not exist in array");
                    return false;
                }
                if ( ! is_scalar($value[$indexKey])) {
                    trigger_error("Key \"$indexKey\" does not contain scalar value");
                    return false;
                }
                $array[$value[$indexKey]] = $value[$columnKey];
            }
        }
        return $array;
    }
}

//check if Add to Cart button has been submitted
if(filter_input(INPUT_POST, 'add_to_cart')){
    if(isset($_SESSION['shopping_cart'])){
        
        //keep track of how mnay products are in the shopping cart
        $count = count($_SESSION['shopping_cart']);
        
        //create sequantial array for matching array keys to products id's
        $product_ids = array_column($_SESSION['shopping_cart'], 'id');
        
        if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
        $_SESSION['shopping_cart'][$count] = array
            (
                'id' => filter_input(INPUT_GET, 'id'),
                'p_name' => filter_input(INPUT_POST, 'p_name'),
                'p_price' => filter_input(INPUT_POST, 'p_price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );   
        }
        else { //product already exists, increase quantity
            //match array key to id of the product being added to the cart
            for ($i = 0; $i < count($product_ids); $i++){
                if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    //add item quantity to the existing product in the array
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
        
    }
    else { //if shopping cart doesn't exist, create first product with array key 0
        //create array using submitted form data, start from key 0 and fill it with values
        $_SESSION['shopping_cart'][0] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'p_name' => filter_input(INPUT_POST, 'p_name'),
            'p_price' => filter_input(INPUT_POST, 'p_price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
    //loop through all products in the shopping cart until it matches with GET id variable
    foreach($_SESSION['shopping_cart'] as $key => $product){
        if ($product['id'] == filter_input(INPUT_GET, 'id')){
            //remove product from the shopping cart when it matches with the GET id
            unset($_SESSION['shopping_cart'][$key]);
        }
    }
    //reset session array keys so they match with $product_ids numeric array
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}

//pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
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
						<h3 class="breadcrumb-header">CHECKOUT</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li class="active">CHECKOUT</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
	<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Order Details -->
					<div class="col-md-7 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							      <div class="table-responsive">  
					        <table class="table">     
					        <tr>  
					             <th width="20%">PRODUCT</th>  
					             <th width="20%">QUANTITY</th>  
					             <th width="20%">PRICE</th>  
					             <th width="15%">TOTAL</th>  
					             <th width="15%">ACTION</th>  
					        </tr> 
					        <?php   
					        if(!empty($_SESSION['shopping_cart'])):  
					            
					             $total = 0;  
					        
					             foreach($_SESSION['shopping_cart'] as $key => $product): 
					        ?>  
					        <tr>  
					           <td><b><?php echo $product['p_name']; ?></b></td>  
					           <td><?php echo $product['quantity']; ?></td>  
					           <td><?php echo $product['p_price']; ?></td>  
					           <td><?php echo number_format($product['quantity'] * $product['p_price'], 2); ?></td>  
					           <td>
					               <a href="checkout.php?action=delete&id=<?php echo $product['id']; ?>">
					                    <div class="btn-danger text-center font-weight-bold">Remove</div>
					               </a>
					           </td>  
					        </tr>  
					        <?php  
					                  $total = $total + ($product['quantity'] * $product['p_price']);  
					             endforeach;  
					        ?>  
					        <tr>  
					             <td colspan="3" align="right"><b>Total Amount (Kshs)</b></td>  
					             <td align="right"><b><?php echo number_format($total, 2); ?></b></td>  
					             <td></td>  
					        </tr>  
					        <tr>
					            <!-- Show checkout button only if the shopping cart is not empty -->
					            <td colspan="5">
					             <?php 
					                if (isset($_SESSION['shopping_cart'])):
					                if (count($_SESSION['shopping_cart']) > 0):
					             ?>
	                           <?php endif; endif; ?>
				            </td>
		                  </tr>
				      <?php  
				endif;
			?>  
			</table> 
			   </div>
						</div>
						<a href="index.php" class="primary-btn order-submit">Continue Buying</a>
					</div>
					<!-- /Order Details -->
					<div class="col-md-5">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Shiping address</h3>
							</div>
                          <form method="POST" action="data.php">
                          	<div class="form-group">
								<input class="input" type="text" name="fname" id="fname" placeholder="First Name" required="">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="lname" id="lname" placeholder="Last Name" required="">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="phone" id="phone" placeholder="Mobile Number" required="">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="county" id="county" placeholder="County">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" id="email" placeholder="Email" required="">
							</div>
							<div class="form-group">
								<input type="hidden" name="total" id="total" class="form-control" value="<?php echo number_format($total, 2); ?>" required="">
							</div>
							<input type="submit" name="submit" id="btn-order" value="SUBMIT ORDER">
                          </form>
						</div>
						<!-- /Billing Details -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->


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
