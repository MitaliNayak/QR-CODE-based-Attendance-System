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
	</style>
	
</head>
<body>

<form name="form_update" method="post" action="">	
	<div class="row">
		<h1 class="text-center"> INDIVIDUAL ATTENDANCE DETAILS</h1>
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
?>	
	<table style="border:hidden">
	<tr>
	<td>
<?php	
	echo "<select name= 'selectvar'>";
	echo '<option value="" >'.'--- Please Select Person ---'.'</option>';

	while($info = mysqli_fetch_array($sql))                                                     
	{
   	echo '<option value="'.$info['uname'].'">'.$info['uname'].'</option>';
   	$i++;
	}
	echo '</select>';
	?>
	</td>
<?php 
}	

}
?>
	
	
	<td><label><b>FROM</b></label><input type="text" name= "ip1" id="datepicker1" placeholder="yyyy-mm-dd" /></td>
	<td><label><b>TO</b></label><input type="text" name= "ip2" id="datepicker2" placeholder="yyyy-mm-dd" /></td>
	
	<td><button type="submit" class ="magenta" value ="time" name= "timer" id="time">Click me ! </button></td>
	</tr>
	
	</table>

	<hr>
	
</div>



<?php 

$f_usr=$_POST["selectvar"];
$f_usr1=$_POST["ip1"];
$f_usr2=$_POST["ip2"];
$j=1;

$sql =mysqli_query($con,"SELECT uname,att_date,att_check_in,att_check_out,att_diff,att_status FROM tb_attendance t1,tb_user t2 WHERE uname='$f_usr' AND t2.uid=t1.att_uid AND att_date BETWEEN '$f_usr1' AND '$f_usr2'");
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
	<tr><th><b>SR.No.</b></th><th><b>NAME</b></th><th><b>CURRENT DATE</b></th><th ><b>CHECKINTIME</b></th><th><b>CHECKOUTTIME</b></th>
	<th><b>DIFFERENCE</b></th><th><b>STATUS</b></th></tr>

	
	
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
	<td align="center" > <?php echo $info['att_status']; ?> </td> 
	</tr> 
	<?php 
   	$j++;

	}
	?></table>
<?php	
}	
?> 
</div>	
</form>
</body>
</html>
