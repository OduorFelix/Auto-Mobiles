<?php
  
	 require('connect.php');

	 	$id=$_GET['id'];

	     $query=mysqli_query($con, "UPDATE orders SET status='SOLD' WHERE id='$id' AND status=NULL");

	 	   if($query){
	 	  
	 	   	    header('location:orders.php');
	 	   }
	 	   else{
	 	   	  echo "Update Unsucessful...";
	 	   }

?>
