<?php



$connect = [
	# Database Host Name
	'HOSTNAME' => 'localhost',

	# Database Username
	'USERNAME' => 'u546356589_software',

	# Database Password
	'PASSWORD' => '85207410sS!',

	# Database Name
	'DATABASE' => 'u546356589_software'
];

# Tables' Prefix
define('prefix', 'puerto_');

# No need to change anything bellow this line
$db = new mysqli($connect['HOSTNAME'], $connect['USERNAME'], $connect['PASSWORD'], $connect['DATABASE']);
if($db->connect_errno){
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
		exit;
}
