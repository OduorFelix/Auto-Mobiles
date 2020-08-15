<?php
         $dbhost = 'localhost:3306';
         $dbuser = 'jctmotor_admin';
         $dbpass = 'jct@2018';
         $db = 'jctmotor_donuts';
         $con = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
   
         if(!$con ){
            die('Could not connect');
         }

      ?>