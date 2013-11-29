<?php
function valid($uid,$uname)
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>IVORY Framework</title>
	
	<link rel="stylesheet" type="text/css" href="css/ivory.css" media="all">
	
	
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<!-- For Date picker only -->
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	
	<!-- For Date picker only -->
	
	<style>
		.content{width: 100%; height: auto; background-color: #EBEAE8; padding: 30px 12px;}
	.note {
		background-color: #ffffff; 
		padding: 10px 0; 
		color: #333333; 
				border-radius:5px; 
		   -moz-border-radius:5px; 
		-webkit-border-radius:5px;
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
	       -moz-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
		-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
	}	
	
	</style>
	
</head>
<body>

<?php

if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>

<form name="form_update" method="post" action="">	
	<div class="row">
		<h1 class="text-center">EDIT ENTRIES</h1>
	</div>
	<div class="content">	
        <div class="row space-bot">
<?php
$con=mysqli_connect("localhost","root","root","db_attendance");
// Check connection
$i=0;
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: ". mysqli_connect_error();
  }
else
  {	
	$sql =mysqli_query($con,"SELECT * FROM tb_user");

	$num_rows = mysqli_num_rows($sql);?>


<?php
	if($numrow =='0')
	{
    		echo "No results found.";
	}
	else
	{
?>	
<?php 
		echo "<table border='0' >";
		echo "  <tr>
			<th><b>USER ID</b></th>
			<th><b>USERNAME</b></th>
			</tr>";
	
		while($info = mysqli_fetch_array($sql))                                                     
		{
   			echo "<tr>";
			echo '<td>' .$info['uid']. '</td>';
			echo '<td>' .$info['uname']. '</td>';
			echo '<td><a href="edit.php?uid='. $info['uid'] .'">Edit</a></td>';
			echo '<td><a href="delete.php?uid='. $info['uid'] .'">Delete</a></td>';
			echo "</tr>";
		}
		echo "</table>";

	}

  }	


?>
<hr>
	
</div>
<p><a href="insert.php">Insert new record</a></p>
</div>
</form>
		
	
</body>
</html>
