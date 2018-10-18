<?php 

require_once 'csv_frame.php';

/**
* CSV Frame Events
*/
class FRMAE_CSV_Events extends FRMAE_CSV
{
	
	function __construct($theCSV = null)
	{
		parent::__construct();

		$this->theCSV = $theCSV;
		
		return;
	}

		// Virtual event handlers, overide them in your derived class
	function mouseEventStartID( $event ){
		$event->Skip();
		$this->startid->Clear();
		return;
	}
	
	function mouseEventEndID( $event ){
		$event->Skip();
		$this->endID->Clear();
		return;

	}
	
	function generate_csv( $event ){

		$startVal = (int) $this->startid->GetValue();
		$endVal = (int) $this->endID->GetValue();

		if (empty($startVal) || empty($endVal))
			return;

		

		$this->the_db = new DB_Ops();

		$getCellData = $this->the_db->query_sql_select("SELECT `shop_code`, `book_number`, `work_order_number`, `date`, `customer_name`, `customer_address`, `customer_phone_number`, `description_of_goods`, `quantity`, `unit_of_mesurement`, `rate`, `amount`, `adv`, `adv_date`, `product_delivered` FROM general_info WHERE `id` BETWEEN {$startVal} AND {$endVal};");

		if (empty($getCellData))
			return;

		foreach ($getCellData as $key => $columnValue) {
			//var_dump($cellValue);

			$columnValueArr[] = $columnValue;
		}

		$this->theCSV->outputCSV($columnValueArr);

		$event->Skip();
	}

}


 ?>