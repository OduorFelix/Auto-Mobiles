<?php
     session_start();
	 require('connect.php');

	 $mod="";
	 $rslt="";

	 if(isset($_POST['submit'])){
          $email=$_POST['email'];
          $password=md5($_POST['password']);

          $check_login=mysql_query("SELECT * FROM users WHERE email='$email' AND password='$password'");
            if(mysql_num_rows($check_login) == 1){
            	$run=mysql_fetch_array($check_login);
                  $id=$run['id'];
                   $email=$run['email'];

              if($id == 1){
                 $_SESSION['email'] = $run['email'];
                 header('location:dashboard.php');
              }
               elseif ($id == 2) {
               	 $_SESSION['email'] = $run['email'];
                 header('location:dashboard.php');
               }
              else{
              	$mod="Email Address or Password Incorrect...";
              }
            else{
                $mod="Email Address or Password Incorrect...";
            }
         }
	 }

?>