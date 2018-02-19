<?php
//define some contstant
    define( "DB_DSN", "mysql:host=localhost;dbname=college" );
    define( "DB_USERNAME", "root" );
    define( "DB_PASSWORD", "kronos" );
	define( "CLS_PATH", "class" );
	define("LOGGEDINN",false);

$servername = "localhost"; //replace it with your database server name
$username = "root";  //replace it with your database username
$password = "kronos";  //replace it with your database password
$dbname = "college";
//include the classes
	include_once( CLS_PATH . "/user.php" );
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
