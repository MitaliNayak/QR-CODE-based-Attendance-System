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
	
	
	<style>
		.content{width: 100%; height: auto; background-color: #EBEAE8; padding: 30px 12px;}
		
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
	
<html>
<head>
<title>Edit Records</title>
</head>
<body>
<?php

if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>


<form action="" method= "post">

	
	<div class="row">
		<h1 class="text-center">EDIT ENTRIES</h1>
	</div>
	<div class="content">	
		<p align="left"><a href="viewadmin.php" > Back</a>
		<a href="logout.php"><button class="magenta" style="float:right;">logout</button></a></p>
        <div class="row space-bot">
<input type="hidden" name="uid" value="<?php echo $uid; ?>"/>
<p></p>
<table>
<tr>
<td colspan="2"><b>Edit Records</b></td>
</tr>
<tr>
<td width="179"><b>ID</b></td>
<td><label>
<input type="text" name="uid" value="<?php echo $uid; ?>" disabled />
</label></td>
</tr>

<tr>
<td width="179"><b>uname<em>*</em></b></td>
<td><label>
<input type="text" name="uname" value="<?php echo $uname; ?>" />
</label></td>
</tr>


<tr align="Right">
<td colspan="2"><label>
<button type="submit" class ="magenta"  name="submit" >Submit</button>
</label></td>
</tr>
</table>
<hr>
	
</div>
</div>
</form>
</body>
</html>
<?php
}



include('config.php');

if (isset($_POST['submit']))
{

	if (is_numeric($_POST['uid']))
	{

	$uid = $_POST['uid'];
	$uname = mysql_real_escape_string(htmlspecialchars($_POST['uname']));



		if ($uid == '' || $uname == '')
		{

			echo "<script>alert('You must enter a value.')</script>";


			valid($uid, $uname);
		}
		else
		{

			mysql_query("UPDATE tb_user SET uid='$uid', uname='$uname' WHERE uid='$uid'")
			or die(mysql_error());

			header("Location: viewadmin.php");
		}
	}
	else
	{

		echo 'Error! here';
	}
}
else
{

	if (isset($_GET['uid']) && is_numeric($_GET['uid']) && $_GET['uid'] > 0)
	{

		$uid = $_GET['uid'];
		$result = mysql_query("SELECT * FROM tb_user WHERE uid=$uid")
		or die(mysql_error());
		$row = mysql_fetch_array($result);

		if($row)
		{

			$uid = $row['uid'];
			$uname = $row['uname'];


			valid($uid, $uname);
		}
		else
		{
			echo "No results!";
		}
	}
	else
	{
		echo 'Error last!';
	}
}
?>

