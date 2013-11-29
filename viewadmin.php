<!DOCTYPE HTML>
<html>
<head>
	
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

	
	button:active { background-color: fuchsia; }
	
	.hidden 
	{
   		 border: none;
   		 visibility: hidden;
	}
	
	 #round-image
	 {
   		border-radius: 100%;
   		-o-border-radius: 100%;
   		-webkit-border-radius: 100%;
   		-moz-border-radius: 100%;
	}
	
	th{color: #878383;}
	tr{color: #000000;}


	tr:hover {  
			 background: #848181;
			 color: #FFFFFF; 
		} 

	tr:hover a
	 { 
     		color: #FFFFFF;

	 }

	tr:hover th
	 { 
     		color: #878383;

	 }
	</style>


<script type="text/javascript">
    	function noBack() 
	{
		 window.history.forward(); 
	}
   	noBack();
   	window.onload = noBack;
   	window.onpageshow = function (evt) 
					{ 
						if (evt.persisted) noBack(); 
					}
   	window.onunload = function () 
				{
 					void (0); 
				}
      </script>
	
</head>
<body>


<form name="form_update" method="post" action="logout.php">

	
	<div class="row">
		<h1 class="text-center">Add Users</h1>
	</div>
	<div class="content">	
		<p align= "left"><a href="insertadmin.php">Insert New Users</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="report.php" align="right">View Details<a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="reportTotal.php" align="right">View Report<a>

<button type="submit" class="magenta" style="float:right;">logout</button>
<!-- <a href="logout.php" align="right">LOGOUT</a>--></p>

	
        <div class="row space-bot">
<?php
	include('config.php');

	$sql = mysql_query("SELECT * FROM tb_user")
	or die(mysql_error());
	
		echo "<table border='0' >";
		echo "  <tr>
			<th><b>User Id</b></th>
			<th><b>Username</b></th>
			</tr>";
	
		while($info = mysql_fetch_array($sql))                                                     
		{

		      $id = $info['uid'];
   		      echo "<tr>";
		      echo '<td>' .$info['uid']. '</td>';
		      echo '<td>' .$info['uname']. '</td>';
		      echo '<td > <a href="editnew.php?uid='. $info['uid'] .'">Edit</a> </td>
		      <td>	
<a href="deleteadmin.php?uid='. $id .'" onclick="return confirm(\'Are you sure you want to delete?\')">Delete</a></td>';	
		      echo "</tr>";
		}

		echo "</table>";
 ?>
<hr>
</div>

</div>

</form>		
	
</body>
</html>
