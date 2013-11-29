<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="test1"; // Database name
$tbl_name="test_mysql"; // Table name 


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

//$result = mysql_query("SELECT * FROM test_mysql WHERE id='$id'") 
//or die(mysql_error());

$result = mysql_query("UPDATE test_mysql SET name='$name', lastname='$lastname', email='$email' WHERE id = $id");

?>
<html><body>Thank You - It is Updated</body></html>