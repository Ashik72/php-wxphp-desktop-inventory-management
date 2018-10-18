<?php 


require_once "work_order_show_frame.php";

require_once "work_order_show_frame_events.php";

require_once "event_frame_edit.php";

class records_Frame_Events extends records_Frame
{

	private $the_db = null;
	
	function __construct()
	{
		//$this->Connect( wxEVT_ACTIVATE, array($this, "main_frame_activate") );
		parent::__construct();

		//$this->the_db = $db;
		
		$this->the_db = new DB_Ops();

		$row_count = count($this->the_db->query_sql_select("SELECT `id` FROM general_info;"));

		$this->row_count = $row_count;

		$this->m_grid2->AppendRows($row_count);

		$this->grid = $this->m_grid2;

		$this->setCellValues();
	}


	function records_frame_activate( $event ){
		$event->Skip();

		//DB Mods



	}	

	function leftDClickCell( $event ){
		$event->Skip();

		if ($event->GetCol() === 2)
			$this->click_col_2( $event );
		elseif ($event->GetCol() === 15)
			$this->click_col_15( $event );
		elseif ($event->GetCol() === 16)
			$this->click_col_16( $event );
		else
			return;

		 	return;

/*
$event->GetCol(), $event->GetRow(), $this->grid->GetCellValue($event->GetRow())
		var_dump($event->GetCol());
		var_dump($event->GetRow());
		var_dump($this->grid->GetCellValue($event->GetRow(), $event->GetCol()));
*/
	}

	protected function setCellValues() {

		$getCellData = $this->the_db->query_sql_select("SELECT `id`, `shop_code`, `book_number`, `work_order_number`, `date`, `customer_name`, `customer_address`, `customer_phone_number`, `description_of_goods`, `quantity`, `unit_of_mesurement`, `rate`, `amount`, `adv`, `adv_date`, `product_delivered` FROM general_info;");

		//var_dump($getCellData);


			//$this->grid->SetCellValue(0, 0, $getCellData[0]["shop_code"]);
			//$this->grid->SetCellValue(0, 1, $getCellData[0]["book_number"]);


	for ($j = 0; $j < $this->row_count; $j++) {
			//$j = 0;

			//for ($i = 0; $i < 15; $i++) {

			$product_raw_id[] = $getCellData[$j]["id"];
			$product_raw_id_keys[] = $getCellData[$j]["work_order_number"];


			$this->the_product_id[$getCellData[$j]["work_order_number"]] += $getCellData[$j]["id"];

			$this->grid->SetCellValue($j, 0,  $getCellData[$j]["shop_code"]);
			$this->grid->SetCellValue($j, 1, $getCellData[$j]["book_number"]);
			$this->grid->SetCellValue($j, 2, $getCellData[$j]["work_order_number"]);
			$this->grid->SetCellValue($j, 3, $getCellData[$j]["date"]);
			$this->grid->SetCellValue($j, 4, $getCellData[$j]["customer_name"]);
			$this->grid->SetCellValue($j, 5, $getCellData[$j]["customer_address"]);
			$this->grid->SetCellValue($j, 6, $getCellData[$j]["customer_phone_number"]);
			$this->grid->SetCellValue($j, 7, $getCellData[$j]["description_of_goods"]);
			$this->grid->SetCellValue($j, 8, $getCellData[$j]["quantity"]);
			$this->grid->SetCellValue($j, 9, $getCellData[$j]["unit_of_mesurement"]);
			$this->grid->SetCellValue($j, 10, $getCellData[$j]["rate"]);
			$this->grid->SetCellValue($j, 11, $getCellData[$j]["amount"]);
			$this->grid->SetCellValue($j, 12, $getCellData[$j]["adv"]);
			$this->grid->SetCellValue($j, 13, $getCellData[$j]["adv_date"]);
			$this->grid->SetCellValue($j, 14, $getCellData[$j]["product_delivered"]);
				

		//}
	}

	$this->final_product_keys = array_combine($product_raw_id_keys, $product_raw_id);


	for ($i=0; $i < $this->row_count; $i++) { 
			
		$this->grid->SetCellValue($i, 15, "Edit Data");
	}

	for ($i=0; $i < $this->row_count; $i++) { 
			
		$this->grid->SetCellValue($i, 16, "Delete");
	}



	}

	function click_col_2($event = null) {

/*		var_dump($event->GetCol());
		var_dump($event->GetRow());
		var_dump($this->grid->GetCellValue($event->GetRow(), $event->GetCol()));
*/

		$this->total_amount = $this->grid->GetCellValue($event->GetRow(), 11);


    $this->show_work_order_frame = new WORK_ORDER_SHOW_Events($this->the_db, $event->GetCol(), $event->GetRow(), $this->grid->GetCellValue($event->GetRow(), $event->GetCol()), $this->total_amount);

	//$this->show_work_order_frame = new WORK_ORDER_SHOW_Events();
    $this->show_work_order_frame->Show();

		return;

	}
	
	function click_col_15($event = null) {

	$product_id = $this->final_product_keys[$this->grid->GetCellValue($event->GetRow(), 2)];

	//var_dump($product_id);

	$this->total_amount = $this->grid->GetCellValue($event->GetRow(), 11);


	$this->work_order_edit_frame = new event_frame01_edit($product_id, $event->GetRow(), 2, $this->grid->GetCellValue($event->GetRow(), 2), $this->total_amount );
    $this->work_order_edit_frame->Show();


/*
		var_dump($event->GetCol());
		var_dump($event->GetRow());
		var_dump($this->grid->GetCellValue($event->GetRow(), $event->GetCol()));
*/
		return;

	}

	function click_col_16($event = null) {

		$product_id = $this->final_product_keys[$this->grid->GetCellValue($event->GetRow(), 2)];

	$sql_delete = "DELETE FROM `general_info` WHERE `id` = {$product_id};";

	$delete = $this->the_db->query_sql_insert($sql_delete);


	if ($delete['status'] === 0) {
		//$this->work_order_record_status->SetLabel(error_work_order.$delete['log']);
		var_dump(error_work_order.$delete['log']);
		return;
	}
	
	$this->grid->DeleteRows($event->GetRow(), 1);
	var_dump(work_order_deleted);


		return;

	}


}