<?php 
define('INTRANET_DB_HOST', 'localhost');
define('INTRANET_DB_USER', 'root');
define('INTRANET_DB_PASS', '12345');
define('INTRANET_DB_NAME', 'intranet_nw');
define('INTRANET_DB_PREFIX', 'intra_');
define("AWOD_KEY", "jqHyXrwM");
define("AWOD_NONCE", "cL6vM8mN7eT8xT3s");

// Create connection
global $intra;
$intra = new mysqli(INTRANET_DB_HOST, INTRANET_DB_USER, INTRANET_DB_PASS, INTRANET_DB_NAME);
// if($intra)
// {
// 	echo"connection Successfully..";
// }

// Check connection
if (!$intra) {
    die("Connection failed: " . mysqli_connect_error());

}