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
  $uid =$_GET['uid'];

	
  
  //write the query to delete the person.
  $query = "DELETE FROM `tb_user` WHERE uid='$uid'";

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



