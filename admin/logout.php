<?php
ob_start();
include("connection.php"); 
$txtUsername=$_SESSION['txtUsername'];

if($_SESSION['txtUsername'])
	{
	
	}
	
else
{
echo "<script type='text/javascript'> window.location='admin_login.php'; </script>"; 
}
?>
<?php 
if($_SESSION['txtUsername'])
{ 
session_unset(); 
session_destroy();
header( "Location: index.php?admin_logout" ); 
} 
ob_flush(); 
?> 