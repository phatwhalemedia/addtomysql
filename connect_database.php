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

$db  = "SELECT * FROM pracinfo";
$result = mysqli_query($connection, $db);

while($row = mysqli_fetch_array($result))
{
echo "\n";
echo "Name: "    . $row['Name'] . PHP_EOL;
echo "Region: "  . $row['Country'] . PHP_EOL;
echo "email: "   . $row['email'] . PHP_EOL;
echo "website: " . $row['website'] . PHP_EOL;

}


mysqli_close($connection);