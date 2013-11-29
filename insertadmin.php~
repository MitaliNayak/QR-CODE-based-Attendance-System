<?php
function valid($uid, $uname)
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Add Users</title>
	
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
</head>
<body>

	<div class="row">
		<h1 class="text-center">Add User</h1>
	</div>
	<div class="content">
<p>	
<a href="viewadmin.php">Back</button>
<a href="logout.php"><button class="magenta" style="float:right;">logout</button></a></p>
        <div class="row space-bot">
<form action="" method="post">
<p></p>
<table>
<tr>
<td colspan="2"><b>Add User</b></td>
</tr>
<tr>
<td width="179"><b>User ID<em>*</em></b></td>
<td><label>
<input type="text" name="uid" value="<?php echo $uid; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b>Username<em>*</em></b></td>
<td><label>
<input type="text" name="uname" value="<?php echo $uname; ?>" />
</label></td>
</tr>

<tr align="Right">
<td colspan="2"><label>
<!--<input type="submit" name="submit" value="Insert Records">-->
<button type="submit" class ="magenta"  name="submit" >Submit</button>
</label></td>
</tr>
</table>
</form>
</div>
</div>
</body>
</html>
<?php
}

include('config.php');

if (isset($_POST['submit']))
{

	$uid = mysql_real_escape_string(htmlspecialchars($_POST['uid']));
	$uname = mysql_real_escape_string(htmlspecialchars($_POST['uname']));


	if ($uid == '' || $uname == '')
	{
		echo "<script>alert('You must enter both values.')</script>";
		valid($uid,$uname);
	}
	else
	{
		$sql = mysql_query("SELECT * FROM tb_user")
		or die(mysql_error());

		while($info = mysql_fetch_array($sql))                                                     
		{
			
			$id = $info['uid'];
			
			if($id==$uid)
			{
				
				echo'<script language="javascript"> alert("ALLREADY EXIST!! CHOOSE ANOTHER ID");window.location = "insertadmin.php"</script>';
				
			}
			
		}	
		
		mysql_query("INSERT tb_user SET uid='$uid', uname='$uname'")
		or die(mysql_error());

		header("Location: viewadmin.php");
		
		
	}
}
else
{
	valid('','','','');
}
?>

