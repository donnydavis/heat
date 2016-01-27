<?php 
echo "<h1>Hello, World!</h1>";
$serverIP = $_SERVER['SERVER_ADDR'];
echo date('Y-m-d H:i:s');
echo "<p>Server IP is: <b>{$serverIP}</b></p>";
<?php

// Show all information, defaults to INFO_ALL
phpinfo();

?>

