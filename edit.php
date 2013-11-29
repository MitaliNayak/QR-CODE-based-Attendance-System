<?php
function valid($uid,$uname)
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
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

<form action="" method="post">
<input type="hidden" name="uid" value="<?php echo $uid; ?>"/>

<table border="1">
<tr>
<td colspan="2"><b><font color='Red'>Edit Records </font></b></td>
</tr>
<tr>
<td width="179"><b><font color='#663300'>ID<em>*</em></font></b></td>
<td><label>
<input type="text" name="uid" value="<?php echo $uid; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>uname<em>*</em></font></b></td>
<td><label>
<input type="text" name="uname" value="<?php echo $uname; ?>" />
</label></td>
</tr>


<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Edit Records">
</label></td>
</tr>
</table>
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

$error = 'ERROR: Please fill in all required fields!';


valid($uid, $uname);
}
else
{

mysql_query("UPDATE tb_user SET uid='$uid', uname='$uname' WHERE uid='$uid'")
or die(mysql_error());

header("Location: view.php");
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

