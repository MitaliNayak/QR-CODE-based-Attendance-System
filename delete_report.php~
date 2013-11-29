<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>IVORY Framework</title>
	
	<link rel="stylesheet" type="text/css" href="css/ivory.css" media="all">
	
	
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	
	
	<style>
		.content{width: 100%; height: auto; background-color: #EBEAE8; padding: 30px 12px;}
		
	</style>
</head>
<body>

	<div class="row">
		
	</div>
	<div class="content">	
        <div class="row space-bot">

<form action="viewadmin.php" method="post">
<?php
include('config.php');
   
  //get the userid of the person we're deleting.
  $uname =$_GET['uname'];
  $date=$_GET['att_date'];
  $check_in=$_GET['att_check_in'];
  $check_out=$_GET['att_check_out'];
  $diff=$_GET['att_diff'];
	

$con=mysqli_connect("localhost","root","root123","db_aakash_attendance");
$sql =mysqli_query($con,"SELECT * FROM tb_user WHERE uname='$uname'");
$info=mysqli_fetch_array($sql);
$x=$info['uid'];

  //write the query to delete the person.
  $query = "DELETE FROM tb_attendance WHERE att_uid='$x' AND att_date='$date' AND att_check_in='$check_in' AND att_check_out='$check_out' AND att_diff='$diff'";

  //run the query to delete the person.
  $result = mysql_query($query) OR die(mysql_error());
	
 		if($result)
       		{  
			echo'<script language="javascript"> alert("DELETED");window.location = "viewadmin.php"</script>';
       		}
?>


</form>

</div>
</div>
</body>
</html>



