<!DOCTYPE HTML>
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

	
	button:active { background-color: fuchsia; }
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

	<form name="f1" method="POST" action="" >
   
	<div class="row">
		<h1 class="text-center">ADMIN LOGIN</h1>
	</div>
	<div class="content">	
        <div class="row space-bot">
	<div align= "center" width="50%" height="50%">
	<form id="frm" method="POST">
	<lable><b>UERNAME</b></lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name= "usrnm" id="usrnm" value=""/>
		</br></br></br>
	<lable><b>PASSWORD</b></lable>&nbsp;&nbsp;&nbsp;<input type="password" name= "passwd" id="passwd" value=""/>
		</br></br></br></br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	<button type="submit" class ="magenta" name= "submit" >LOGIN</button>

	</form>

<?php 

//header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
//header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");








    	if(isset($_POST['submit']))
	{
        	$Username = $_POST['usrnm'];
        	$Password = $_POST['passwd'];
        	
        	if (!(empty($Username) || empty($Password))) 
        	{
             		echo "$Useranme";
			echo "$Password";
             		if(($Username=="admin")&&($Password=="admin"))
             		{
                  		$_SESSION['user'] = $Username;
				
                  		header("Location:LoginViewController.php");

             		} 
			else 
			{
                  		echo "<script>alert('INVALID USERNAME AND PASSWORD')</script>";
             		}
        	} 
		else
		{
             		echo "<script>alert('You must enter both values.')</script>";

        	}
    	}
?>




	</div>
	</div>
	</div>
	</body>
	</html>
