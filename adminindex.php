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
   	window.onpageshow = function (evt) { if (evt.persisted) noBack(); }
   	window.onunload = function () { void (0); }
	</script>	

	<script type="text/javascript">

	function lockit()
	{
		
		document.getElementById('datepicker1').disabled="true"; 
	}

        </script>	

	<script type="text/javascript">

	function unlockit()
	{
		
		document.getElementById('datepicker1').disabled="false"; 
	}

        </script>	
</head>

<body>
<?php
$con=mysqli_connect("localhost","root","root","db_attendance");
?>
	<form name="form_update" method="post" action="logout.php">	
		<div class="row">
			<h1 class="text-center"> INDIVIDUAL ATTENDANCE DETAILS</h1>
		</div>

		<div class="content">
			<p align= "left"><a href="viewadmin.php">Back</a> 

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<button type="submit" class="small" >Logout</button>

			<!--<a href="logout.php" align="right">LOGOUT</a>--></p>
		<div class="row space-bot">
<?php
		
		$i=0;

		if (mysqli_connect_errno())
  		{
  			echo "Failed to connect to MySQL: ". mysqli_connect_error();
  		}
		else
 		{	
			$sql =mysqli_query($con,"SELECT uname FROM tb_user");
			$num_rows = mysqli_num_rows($sql);?>
			<label><b>NAME</b></label>
<?php
			if($numrow =='0')
			{
	    			echo "No results found.";
			}
			else
			{
?>				<table style="border:hidden">
				<tr>
					<td>
<?php	
						echo "<select id='opt' name= 'selectvar'>";
						echo '<option selected="selected" value="'.'ALL'.'">'.'ALL'.'</option>';
						while($info = mysqli_fetch_array($sql))                                                     
						{
	   						echo '<option value="'.$info['uname'].'" >'.$info['uname'].'</option>';
	   						$i++;
			
						}
						echo '</select>';
	
	
?>
					</td>

					<td>
						<label><b>DATE</b></label>
						<input type="text" name= "ip1" id="datepicker1" placeholder="yyyy-mm-dd" />
					</td>

	
					<td>
						<button type="submit" class ="magenta" value ="time" name= "timer" id="time">Click </button>
					</td>
				</tr>
				</table>

<?php
			}
?>
		<hr>
	
		</div>
<?php 

		$f_usr=$_POST["selectvar"];
		$f_usr1=$_POST["ip1"];
		echo $f_usr;
		if($f_usr=="ALL"&& $f_usr1=='')
		{	
			echo '<script>lockit();</script>'; 

			$sql =mysqli_query($con,"SELECT t1.sr_no,t2.uname,t1.att_date,t1.att_check_in,t1.att_check_out,t1.att_diff,
t1.att_status FROM tb_attendance t1, tb_user t2 WHERE t1.att_uid=t2.uid");
			$num_rows = mysqli_num_rows($sql);

			if($numrow =='0')
			{
		    		echo "No results found.";
			}
			else
			{
?>				<table>

				<tr>
					<td><b>SR.No.</b></td>
					<td><b>NAME</b></td>
					<td><b>CURRENT DATE</b></td>
					<td><b>CHECKINTIME</b></td>
					<td><b>CHECKOUTTIME</b></td>
					<td><b>DIFFERENCE</b></td>
					<td><b>STATUS</b></td>
				</tr>
<?php	
				while($info = mysqli_fetch_array($sql))                                                     
				{
?>					<tr>
						<td align="center" > <?php echo $info['sr_no'] ?> </td>
						<td align="center" > <?php echo $info['uname']; ?> </td>
						<td align="center" > <?php echo $info['att_date']; ?> </td>
						<td align="center" > <?php echo $info['att_check_in']; ?> </td>
						<td align="center" > <?php echo $info['att_check_out']; ?> </td>
						<td align="center" > <?php echo $info['att_diff']; ?> </td>
						<td align="center" > <?php echo $info['att_status']; ?> </td>
					</tr>
<?php				}
?>				</table>
<?php
			}
		}
		else
		if($f_usr=="ALL"&& $f_usr1!="")
		{
			echo '<script>unlockit();</script>'; 
			$sql =mysqli_query($con,"SELECT t1.sr_no,t2.uname,t1.att_date,t1.att_check_in,t1.att_check_out,
t1.att_diff,t1.att_status FROM tb_attendance t1, tb_user t2 WHERE t1.att_date='$f_usr1' AND t1.att_uid=t2.uid");
?>
			<table>

			<tr>
				<td><b>SR.No.</b></td>
				<td><b>NAME</b></td>
				<td><b>CURRENT DATE</b></td>
				<td><b>CHECKINTIME</b></td>
				<td><b>CHECKOUTTIME</b></td>
				<td><b>DIFFERENCE</b></td>
				<td><b>STATUS</b></td>
			</tr>
<?php	
			while($info = mysqli_fetch_array($sql))                                                     
			{
?>		
				<tr>
				<td align="center" > <?php echo $info['sr_no'] ?> </td>
				<td align="center" > <?php echo $info['uname']; ?> </td>
				<td align="center" > <?php echo $info['att_date']; ?> </td>
				<td align="center" > <?php echo $info['att_check_in']; ?> </td>
				<td align="center" > <?php echo $info['att_check_out']; ?> </td>
				<td align="center" > <?php echo $info['att_diff']; ?> </td>
				<td align="center" > <?php echo $info['att_status']; ?> </td>
				</tr>
<?php		
			}
?>			</table>
<?php
		}
		else
		{
			$j=1;

			$sql =mysqli_query($con,"SELECT uname,att_date,att_check_in,att_check_out,att_diff,att_status FROM tb_attendance t1,tb_user t2 WHERE uname='$f_usr' AND att_date ='$f_usr1' AND t2.uid=t1.att_uid ");
			$num_rows = mysqli_num_rows($sql);

			if($numrow =='0')
			{
    				echo "No results found.";
			}
			else
			{
?>
				</br>
				</br>
				<table >
					<tr>
						<th><b>SR.No.</b></th>
						<th><b>NAME</b></th>
						<th><b>CURRENT DATE</b></th>
						<th ><b>CHECKINTIME</b></th>
						<th><b>CHECKOUTTIME</b></th>
						<th><b>DIFFERENCE</b></th>
					</tr>	
<?php
	 			while($info = mysqli_fetch_array($sql))                                                     
				{
?>
					<tr>
					<td align="center" > <?php echo "$j" ?> </td>
					<td align="center" > <?php echo $info['uname']; ?> </td>
					<td align="center" > <?php echo $info['att_date']; ?> </td>
					<td align="center" > <?php echo $info['att_check_in']; ?> </td>
					<td align="center" > <?php echo $info['att_check_out']; ?> </td>
					<td align="center" > <?php echo $info['att_diff']; ?> </td>
<?php			 		echo'<td><a href="editnewindividual.php?uname='. $info['uname'] .' & att_date='.$info['att_date'].' & att_check_in='.$info['att_check_in'].' & att_check_out='.$info['att_check_out'].' & att_diff='.$info['att_diff'].'">Edit</a></td>'
?>
					</tr> 
<?php 
			   		$j++;
				}
?>				</table>
<?php	
			}
		}

	 }	
?> 
</div>	
</form>
</body>
</html>
