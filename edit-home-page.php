<?php 
      session_start();
      require'includes/admin-main-header.php';
?>
<body>
       <!-- Top Header -->
          <?php require'includes/admin-header.php';  ?>
       <!-- // Top Header -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section" style="margin-bottom:-50px;">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Edit Home Page</h3>
						<ul class="breadcrumb-tree">
							<li><a href="dashboard.php">Dashboard</a></li>
							<li class="active">Edit Home Page</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
	
		<!-- Content Section -->
           <div class="section" style="margin-top:3%;">
			<div style="padding-right:5px;padding-left:5px;">
		     <div class="row">
		     	<div class="col-md-3" style="margin-top:-34px;">
                    <?php require'includes/admin-nav.php';  ?>
		     	</div>
            <div class="col-md-9">
        <div class="w3-agileits-pane">
		   <div class="col-md-12 agile-info-stat">
			<div class="stats-info stats-last widget-shadow" style="margin-left:-2%;margin-right:2%;">
				<button class="add-btn" data-toggle="modal" id="add-product-btn" data-target="#addproduct"><i class="fa fa-plus-sign"></i> Add Product</button>

		<?php   
			require('connect.php');

			$query="SELECT id, p_name, p_image, p_price, p_category FROM products ORDER BY id DESC";
			  $result=mysqli_query($con, $query);
			      if($result)
			      {
			        echo '<table class="table stats-table" id="data-tables">

			          <tr>
			      <th><b>Car Name</b></th>
			      <th><b>Image Path</b></th>
			      <th><b>Price</b></th>
			      <th><b>Page Category</b></th>
			      <th><b>Action</b></th>
			      </tr>';
			         while($row = mysqli_fetch_array($result))
			         {
			          echo '<tr>
			         <td>'.$row['p_name'].'</td>
			         <td>'.$row['p_image'].'</td>
			         <td>'.$row['p_price'].'</td>
			         <td>'.$row['p_category'].'</td>
<td><a class="confirm" href="delete-product.php?action=delete&id='.$row['id'].'">Remove</a></td>
			         </tr>';

			          }
			       echo '</table>';
			          mysqli_free_result($result);
			        }
			        else
			        {
			          echo "The Current Users Could Not Be Displayed!";
			        }
			?>



					</div>
			</div>
		  <div class="clearfix"></div>
	  </div>
                   </div> 
				</div>
			</div>
		</div>
		<!-- //Content Section -->
<?php require('add-new-products.php');  ?>
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
