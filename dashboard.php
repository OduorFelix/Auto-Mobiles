<?php 
      session_start();
      require'includes/admin-main-header.php';
?>
<?php
     require('connect.php');
     $sum=0;
     $result = mysqli_query($con, "SELECT SUM( total ) AS value FROM orders");

         while($row = mysqli_fetch_assoc($result)){
         	$value = $row['value'];
         	    $sum += $value;
         } 
?>
<?php
     require('connect.php');
     $COUNT=0;
     $result = mysqli_query($con, "SELECT COUNT( id ) AS items FROM orders");

         while($row = mysqli_fetch_assoc($result)){
         	$items = $row['items'];
         	    $COUNT += $items;
         } 
?>
<?php
     require('connect.php');
     $COUNT=0;
     $result = mysqli_query($con, "SELECT COUNT( id ) AS inventory FROM products");

         while($row = mysqli_fetch_assoc($result)){
         	$inventory = $row['inventory'];
         	    $COUNT += $inventory;
         } 
?>
<body>
       <!-- Top Header -->
          <?php require'includes/admin-header.php';  ?>
       <!-- // Top Header -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section" style="margin-bottom:-50px;%;">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Admin Dashboard</h3>
						<ul class="breadcrumb-tree">
							<li><a href="dashboard.php">Dashboard</a></li>
							<li class="active">Admin Dashboard</li>
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
			<div style="padding-right:5px;padding-left:5px;">
				<div class="row">
                   <div class="col-md-3">
                     <?php require'includes/admin-nav.php';  ?>
                   </div>  
            <div class="col-md-9">
               <!--four-grids here-->
		        <div class="four-grids">
		        	<a href="orders.php">
					<div class="col-md-4 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-th-list" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Orders</h3>
								<h4><?php echo $items; ?></h4>
								
							</div>
							
						</div>
					</div>
					</a>
					<a href="#">
					<div class="col-md-4 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Total Sales</h3>
								<h4><?php echo number_format($sum, 6,",","."); ?></h4>

							</div>
							
						</div>
					</div>
				    </a>
				    <a href="#">
					<div class="col-md-4 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-list" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Inventory</h3>
								<h4><?php echo $inventory; ?></h4>
								
							</div>
							
						</div>
					</div>
				</a>
					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->

<div class="w3-agileits-pane">
		<div class="col-md-12 agile-info-stat">
			<div class="stats-info stats-last widget-shadow" style="margin-left:-2%;margin-right:2%;">
			<h3 class="text-center" style="color: #D10024;"><strong>Current Orders</strong></h3>
			<?php   
			require('connect.php');

			$query="SELECT id, fullname, phone, county, email, item, total FROM orders ORDER BY id DESC";
			  $result=mysqli_query($con, $query);
			      if($result)
			      {
			        echo '<table class="table stats-table" id="data-tables">

			          <tr>
			      <th><b>Customer</b></th>
			      <th><b>Phone</b></th>
			      <th><b>County</b></th>
			      <th><b>Email Address</b></th>
			      <th><b>Order</b></th>
			      <th><b>Total Amount</b></th>
			      </tr>';
			         while($row = mysqli_fetch_array($result))
			         {
			          echo '<tr>
			         <td>'.$row['fullname'].'</td>
			         <td>'.$row['phone'].'</td>
			         <td>'.$row['county'].'</td>
			         <td>'.$row['email'].'</td>
			         <td>'.$row['item'].'</td>
			         <td>'.$row['total'].'</td>
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

<!-- FOOTER -->
           <?php require'includes/admin-footer.php';  ?>
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
