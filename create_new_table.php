<?php 
$connection = mysqli_connect('localhost','phatwhalemedia','mypasswd','practitioners');

if (!$connection) { //Connect to the database
	echo "Error: Failed to connect to database." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

echo "Success: Connected to the XAMPP MariaDB database." . PHP_EOL;
echo "Host Info: " . mysqli_get_host_info($connection) . PHP_EOL;

$sql_query  = "CREATE TABLE IF NOT EXISTS pracinfoeu (idnum INT(2) AUTO_INCREMENT KEY, Name VARCHAR(128) NOT NULL, email VARCHAR(128) NOT NULL, Country VARCHAR (128) NOT NULL, website VARCHAR (128) NOT NULL)";
$result = mysqli_query($connection, $sql_query);

if (!$result) {
	printf ("Error Message: %s\n", mysqli_error($connection));
}

else {
	echo "A new table has been succesfully created" . PHP_EOL;
}

mysqli_close($connection);
?>