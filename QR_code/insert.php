<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="test1"; // Database name
$tbl_name="test_mysql"; // Table name 


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


// Get values from form
$id=$_POST['id'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];

$sql="INSERT INTO $tbl_name(id, name, lastname, email)VALUES('$id', '$name', '$lastname', '$email')";
$result=mysql_query($sql);

//mysqli_query($con,"INSERT INTO $test_mysql VALUES(11, 'Billly', 'Blueton', 'bb5@phpeasystep.com')");
//mysqli_query($con,"INSERT INTO $test_mysql VALUES(12, 'Jame', 'Campbell', 'jame@somewhere.com')");
//mysqli_query($con,"INSERT INTO $test_mysql VALUES(13, 'Mark', 'Jackson', 'mark@phpeasystep.com')");
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='index.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 
?>
<?php
// close connection
mysql_close();
?>