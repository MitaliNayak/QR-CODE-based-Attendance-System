<?php
/* Database Connection */

  $host = "localhost";
  $user = "root";
  $pass = "root123";
  $database = "db_aakash_attendance";

  //connect to the database.
  $db = mysql_connect($host, $user, $pass) or die ('MySQL connect failed. ' . mysql_error()); ;
  mysql_select_db($database,$db) or die('Cannot select database. ' . mysql_error());
 
?> 


