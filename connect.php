<?php
         $dbhost = 'localhost';
         $dbuser = 'Admin';
         $dbpass = 'admin@19920';
         $db = 'jctmotor_db';
         $con = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
   
         if(!$con ){
            die('Could not connect');
         }

      ?>