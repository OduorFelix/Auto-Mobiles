<?php

 session_start();
 
 require('connect.php');

   if(isset($_POST['submit']))
    {
      $fname = $_POST['fname']; 
        $lname = $_POST['lname'];    
         $phone = $_POST['phone'];
          $county = $_POST['county'];    
           $email = $_POST['email'];     
            $fullname = $fname.' '.$lname; 
            $item = '';
             $total = $_POST['total'];

                foreach($_SESSION['shopping_cart'] as $row):
                   if($row['quantity'] != 0)
                   {
                     $name = '('.$row['quantity'].') '.$row['p_name'];
                     
                        $item = $name.', '.$item;
                        
                           mysqli_query($con, "INSERT INTO orders VALUES (NULL, '$fullname', '$phone', '$county', '$email', '$item', '$total', 'ORDER')");
                                 
                                 unset($_SESSION['shopping_cart']); 
                                 
                               header('location:thanks.php');
                    }
             else
             {
              echo "Not working";
             }
      endforeach;
    } 

?>