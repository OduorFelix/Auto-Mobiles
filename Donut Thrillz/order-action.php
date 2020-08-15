<?php
   session_start();
   require('connect.php');
 

  if (isset($_POST['submit'])){

    $names=$_POST['names'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $donut_type=$_POST['donut_type'];
    $message=$_POST['message'];
    


    $sql = mysqli_query($con, "INSERT INTO orders (id, names, email, phone, donut_type, message) 
                                VALUES (NULL, '$names', '$email', '$phone', '$donut_type', '$message')");

       if($sql){
           $to = "oduorfelix2@gmail.com";
           $subject = "Customer Orders";
           $message .="Customer Name(s):" .$_POST['names']. "\r\n\r\n";
           $message .="Customer Email Address:" .$_POST['email']. "\r\n\r\n";
           $message .="Customer Phone Number:" .$_POST['phone']. "\r\n\r\n";
           $message .="Donut Type:" .$_POST['donut_type']. "\r\n\r\n";
           $message .="Customer Message:" .$_POST['message']. "\r\n\r\n";
           
           $headers = "From:oduorfelix2@gmail.com" . "\r\n" .
           "CC: oduorfelix2@gmail.com";

            $success = mail($to, $subject, $message, $headers);
     
             if($success){
        
            echo '<script>alert("Your Request has been sent...Good day");</script>';
            }
            else{
              echo '<script>alert("Your Request Could Not Be Sent");</script>';
            }
        }
        else{
              echo '<script>alert("An Error Occurred While Sending Your Request, Please Try Again...");</script>';
        }
  }
?>