<?php 
      session_start();

      require('connect.php');

    if (isset($_POST['submit']))
       {
        $names = $_POST['names'];   
          $email = $_POST['email'];   
           $subject = $_POST['subject'];
            $message = $_POST['message'];    

             $result= mysqli_query($con, "INSERT INTO contacts  VALUES (NULL, '$names', '$email', '$subject', '$message')");

        if($result)
        {
             header('location:thanks-2.php');
      }
      else{
           echo "Not working";
      }   

        
    }
    

?>