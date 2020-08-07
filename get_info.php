<?php 
function createNewEntry() {
	
	echo "Enter Practitioner Name: ";

	$getname = fgets(STDIN,128);

	echo "Enter Practitioner email: ";

	$getemail = fgets(STDIN,128);

	echo "Enter Practitioner Country: ";

	$getcountry = fgets(STDIN,128);

	echo "Enter Website if available: ";

	$getwebsite = fgets(STDIN,128);

	$thearray = array('Name' => $getname ,'email'=> $getemail, 'Country'=> $getcountry, 'website');

return ($thearray);
}

$newprac = createNewEntry();

function commitArray($pracarray){
	print_r(PHP_EOL);
	print_r("Do you want to commit to database? " . PHP_EOL );
	print_r(PHP_EOL);

	var_dump($pracarray);

	print_r(PHP_EOL);
	print_r("Commit? :");
	$response = fgets(STDIN,3);
}

commitArray($newprac);

// do (input new practitioner info and review to commit to MySQL database) while $response is true

