<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="test1"; // Database name
$tbl_name="test_mysql"; // Table name 


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar
$id=$_GET['id'];

$event_sql = "SELECT * FROM test_mysql WHERE id=$id";
$event_query = mysql_query($event_sql) or die(mysql_error());
$rsGet = mysql_fetch_assoc($event_query);
//while($result = mysql_fetch_array($event_query));

?>
<html>
<body>
<form id="form1" name="form1" method="post" action="update1.php">

<p><span class="style4">Id</span><br />
        <input name="id" type="text" id="id" value="<?php echo $rsGet['id']; ?>" size="40" />
</p>
      <p><span class="style4">Name</span><br />
        <input name="name" type="text" id="name" value="<?php echo $rsGet['name']; ?>" size="40" />
</p>
      <p><span class="style4">LastName </span><br />
          <input name="lastname" type="text" id="lastname" value="<?php echo $rsGet['lastname']; ?>" size="40" />
      </p>
      <p><span class="style4">email </span><br />
        <input name="email" type="text" id="email" value="<?php echo $rsGet['email']; ?>" />
      </p>
      <p>
        <input type="submit" name="Submit" value="Save" />
        <input type="reset" name="reset" value="Clear" />
      </p>
    </form>
</body></html>