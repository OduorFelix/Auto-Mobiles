<?php
  
   require('connect.php');

    $id=$_GET['id'];

       $query=mysqli_query($con, "DELETE FROM products WHERE id='$id'");

       if($query){

            header('location:edit-home-page.php');
       }
       else{
          echo "Update Unsucessful...";
       }

?>