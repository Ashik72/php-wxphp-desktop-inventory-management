<?php 

require_once "strings.php";

define("DB_NAME", "db01.db");

define ("shop_codes", serialize (array( "ERD", "PP", "MK", "QC" )));

define("TIMEZONE", 'Asia/Dhaka');

define ("unit_of_measurement", serialize (array( "SFT", "PCS", "ROLL", "kg" )));

$errors = array(

	'work_order_empty' => "ERROR: MUST NEED ONE WORK ORDER!"
	);

 ?>