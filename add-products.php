<?php
   session_start();
   require('connect.php');

  if (isset($_POST['submit'])){

    $p_name=$_POST['p_name'];
    $p_price=$_POST['p_price'];
    $p_category=$_POST['p_category'];
    $p_section=$_POST['p_section'];

    $type = explode('.', $_FILES['p_image']['name']);
	$type = $type[count($type)-1];		
	$url = 'images/'.uniqid(rand()).'.'.$type;
	if(in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))){
         if(is_uploaded_file($_FILES['p_image']['tmp_name'])) {			
			if(move_uploaded_file($_FILES['p_image']['tmp_name'], $url)) {

				$sql = mysqli_query($con, "INSERT INTO products (id, p_name, p_image, p_price, p_category, p_section) VALUES (NULL, '$p_name', '$url', '$p_price', '$p_category', '$p_section')");

				if($sql){
                      header('location:dashboard.php');
				}
				else{
                    echo "Error while adding the product";
				}
			}
			else{
				echo "Error while adding the product, file uploading";
			}
	}
}
}
?>
 