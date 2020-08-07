<?php 
$connection = mysqli_connect('localhost','phatwhalemedia','mypasswd','practitioners');

if (!$connection) {
	echo "Error: Failed to connect to database." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

echo "Success: Connected to the XAMPP MariaDB database. ";
echo "Host Info: " . mysqli_get_host_info($connection) . PHP_EOL;

$query  = "INSERT INTO pracinfo (Name, email, Country, website) VALUES ('Dawn Stringfield','drstringfield@gmail.com','Missouri, United States','N/A')";

$result = mysqli_query($connection, $query);

echo "Records have been succesfully entered into the database" .PHP_EOL;

mysqli_close($connection);
?>