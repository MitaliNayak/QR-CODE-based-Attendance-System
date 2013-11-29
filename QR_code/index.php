<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>QR Code</title>
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/modal.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
         <!-- panel with buttons -->
        <div class="main">
            <div class="panel">
                <a href="#login_form" id="login_pop">Log In</a>
                <a href="#join_form" id="join_pop">Add user</a>
            </div>
			<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="test1"; // Database name
$tbl_name="test_mysql"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// select record from mysql
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>

<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td colspan="5" bgcolor="#FFFFFF"><strong>Delete data in mysql</strong> </td>
</tr>

<tr>
<td align="center" bgcolor="#FFFFFF"><strong>Id</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Lastname</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Email</strong></td>
<td align="center" bgcolor="#FFFFFF">&nbsp;</td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['name']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['lastname']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['email']; ?></td>
<td bgcolor="#FFFFFF"><a href="delete_ac.php?id=<?php echo $rows['id']; ?>"  onclick="return confirm('Are you sure?')">

Delete</a></td>
<td bgcolor="#FFFFFF"><a href="update.php?id=<?php echo $rows['id']; ?>">Edit</a></td>
</tr>

<?php
// close while loop
}
?>

</table><br />

<?php
// close connection;
mysql_close();
?>

        </div>

        <!-- popup form #2 -->
		
        <!-- popup form #2 -->
        <a href="#x" class="overlay" id="join_form"></a>
        <div class="popup">
		
            <h2><center>Add User</center></h2>
			<br />
            <p>Please enter your details here</p>
			<br />
			<form name="form1" method="post" action="insert.php">
            <div>
                <label for="email">ID</label>
                <input type="text" id="id" name="id" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
			<br />
            <div>
                <label for="pass">name</label>
                <input type="text" id="name" name="name" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
			<br />
            <div>
                <label for="firstname">Last name</label>
                <input type="text" id="lastname" name="lastname" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
			<br />
            <div>
                <label for="lastname">E mail</label>
                <input type="text" id="email" name="email" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
			<br />
            <center><input type="submit" name="submit" value="Add User" />&nbsp;&nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;
			<a href="#login_form" id="login_pop">Log In</a></center>

            <a class="close" href="#close"></a>
			</form>
        </div>
		
		
    </body>
</html>