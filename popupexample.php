<!DOCTYPE html>
<html lang="en" >
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

	.content
	{
		width: 100%; 
		height: auto;
		background-color: #EBEAE8;
		padding: 30px 12px;
	}

	.note 
	{
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

	
	button:active 
	{ 
		background-color: fuchsia; 
	}
	
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

	tr:hover 
	{ 
		background: #848181;
	} 
	</style>

        <meta charset="utf-8" />
        <title>CSS3 Modal Popups | Script Tutorials</title>
        <link href="csspopup/layout.css" rel="stylesheet" type="text/css" />
        <link href="csspopup/modal.css" rel="stylesheet" type="text/css" />
    </head>


<body>

	<div class="row">
		<h1 class="text-center">USERS</h1>
	</div>

	<div class="content">	
		<p align= "right"><a href="insertadmin.php">Insert new record</a></p>
        <div class="row space-bot">

<?php
	include('config.php');

	$sql = mysql_query("SELECT * FROM tb_user")
	or die(mysql_error());
	
		echo "<table border='0' >";
		echo "  <tr>
			<th><b>USER_ID</b></th>
			<th><b>USERNAME</b></th>
			</tr>";
	
		while($info = mysql_fetch_array($sql))                                                     
		{

		      $id = $info['uid'];
   		      echo "<tr>";
		      echo '<td><input type="checkbox">' .$info['uid']. '</td>';
		      echo '<td>' .$info['uname']. '</td>';
		      echo '<td><a href="#login_form?uid='. $id .'" id="login_pop">Edit</a></td>';
		      echo '<td><a href="deleteadmin.php?uid='. $id .'" onclick="return confirm(\'Are you sure?\')">delete</a></td>' ;	
		      echo "</tr>";
		}

		echo "</table>";
 ?>


</div>

</div>



<!-- popup form #1 -->
      
<a href="#x" class="overlay" id="login_form"></a>
<div class="popup">

	<input type="hidden" name="uid" value="<?php echo $uid; ?>"/>
	<h2>Edit entries!</h2>
           
	<div>
		<label for="login">USERID</label>
		<input type="text" value="" />
	</div>

	<div>
		<label for="password">USERNAME</label>
		<input type="text" value="" />
	</div>

	<input type="button" value="Log In" />

	<a class="close" href="#close"></a>
</div>

<hr>
	
</div>
<a class="close" href="#close"></a>
</div>

</div>
<hr>
</body>
</html>
