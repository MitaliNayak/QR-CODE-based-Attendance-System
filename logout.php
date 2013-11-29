
 <?php




// Inialize session
session_start();

// Delete certain session
unset($_SESSION['username']);
session_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);
// Delete all session variables
//session_destroy();

// Jump to login page
header('Location: login.php');

?>



