<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
 
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
 
  if(! $conn ) {
     die('Could not connect: ' . mysqli_error());
  }
 
  echo 'conected successfuly';