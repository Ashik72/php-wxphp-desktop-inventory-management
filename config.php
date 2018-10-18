<?php 

require_once "strings.php";

define("DB_NAME", "db01.db");

define ("shop_codes", serialize (array( "ERD", "PP", "MK", "QC" )));

define("TIMEZONE", 'Asia/Dhaka');

define ("unit_of_measurement", serialize (array( "SFT", "PCS", "ROLL", "kg" )));

define("FILENAME_PDF", "the_output_pdf.pdf"); //not in use, avoid

define("fileNameCSV", "csv_out.csv");

$errors = array(

	'work_order_empty' => "ERROR: MUST NEED ONE WORK ORDER!",
	'shop_code_or_uom' => "ERROR: MUST NEED Shop Code Or Unit Of Mesurement Value!"

	);

 ?>