<?php 	

     session_start();
	 require('connect.php');

$sql = "SELECT * FROM orders WHERE id='$id'";

$query=mysql_query($sql);

 $table = '
 <table border="1" cellspacing="0" cellpadding="20" width="100%">
	<thead>
		<tr >
			<th colspan="5">

			<center>
				JCT Motors Mombasa LTD
				<center>Customer Name : '.$name.'</center>
				Email : '.$email.'
				Email : '.$phone.'
			</center>		
			</th>
				
		</tr>		
	</thead>
</table>
<table border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>
		<tr>
			<th>S/No.</th>
			<th>Customer Names</th>
			<th>(Quantity) & Product(s) Name</th>
			<th>Total Amount</th>
		</tr>';

		$x = 1;
		while($row = mysql_fetch_array($query)) {			
						
			$table .= '<tr>
				<th>'.$x.'</th>
				<th>'.$row['name'].'</th>
				<th>'.$row['item'].'</th>
				<th>'.$row['total'].'</th>
			</tr>
			';
		$x++;
		} // /while

		$table .= '<tr>
			<th></th>
		</tr>

		<tr>
			<th></th>
		</tr>

		<tr>
			<th>Sub Amount</th>
			<th>'.$total.'</th>			
		</tr>

		<tr>
			<th>Total Amount</th>
			<th>'.$total.'</th>			
		</tr>	

	</tbody>
</table>

<br>
Payment Confirmation:<br><br>

Name:.....................................................................

Signature/Stamp:....................................................................
<br><br>

Date:.......................................................

 ';


$connect->close();

echo $table;