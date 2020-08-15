<?php
  
   require('connect.php');

    $id=$_GET['id'];

       $query=mysqli_query($con, "DELETE FROM contacts WHERE id='$id'");

       if($query){

            header('location:messages.php');
       }
       else{
          echo "Update Unsucessful...";
       }

?>