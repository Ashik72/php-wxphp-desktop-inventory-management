<?php 

require_once "edit_work_order_entry.php";


/**
* Work Order Show Events
*/
class WORK_ORDER_SHOW_Events extends WORK_ORDER_SHOW
{
	
	function __construct($db = null, $col = null, $row = null, $val = null, $total_amount)
	{
		parent::__construct();

		$this->the_db = $db;

		$this->col = $col;

		$this->row = $row;

		$this->val = (int) $val;

		$this->total_amount = $total_amount;

		$this->show_work_order_txt->SetLabel("Showing Work Records For Entry: ".$this->val);

		$row_count = count($this->the_db->query_sql_select("SELECT `id` FROM work_order WHERE `work_order_number` = {$this->val};"));

		$this->row_count = $row_count;

		$this->m_grid1->AppendRows($row_count);
		
		$this->grid = $this->m_grid1;

		$this->insertData();

		//var_dump($this->val);

	}

	function insertData() {

		$getCellData = $this->the_db->query_sql_select("SELECT * FROM work_order WHERE `work_order_number` = {$this->val};");

		//var_dump($getCellData);

	for ($j = 0; $j < $this->row_count; $j++) {
			//$j = 0;

			//for ($i = 0; $i < 15; $i++) {

			$amount_difference += $getCellData[$j]["amount"];


			$this->grid->SetCellValue($j, 0,  $getCellData[$j]["id"]);
			$this->grid->SetCellValue($j, 1, $getCellData[$j]["work_order_number"]);
			$this->grid->SetCellValue($j, 2, $getCellData[$j]["book_number"]);
			$this->grid->SetCellValue($j, 3, $getCellData[$j]["amount"]);
			$this->grid->SetCellValue($j, 4, $getCellData[$j]["date"]);
			$this->grid->SetCellValue($j, 5, $getCellData[$j]["comments"]);
		//}
	}


		$this->remaining_box->SetValue($this->total_amount-$amount_difference);

	for ($i=0; $i < $this->row_count; $i++) { 
			
		$this->grid->SetCellValue($i, 6, "Edit Data");
	}

	for ($i=0; $i < $this->row_count; $i++) { 
			
		$this->grid->SetCellValue($i, 7, "Delete");
	}


	}



	function clickRecordCell( $event ){
		$event->Skip();

		if ($event->GetCol() === 6)
			$this->click_col_6( $event );
		elseif ($event->GetCol() === 7)
			$this->click_col_7( $event );
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


	function click_col_6($event = null) {

		
	$entry_id = $this->grid->GetCellValue($event->GetRow(), 0);
	$work_order_id = $this->grid->GetCellValue($event->GetRow(), 1);
	$the_db = $this->the_db;

	$this->edit_work_order_frame = new edit_work_order_entry_events($entry_id, $work_order_id, $the_db);

	//$this->show_work_order_frame = new WORK_ORDER_SHOW_Events();
    $this->edit_work_order_frame->Show();


		return;
	}

	function click_col_7($event = null) {

	$entry_id = $this->grid->GetCellValue($event->GetRow(), 0);
	$work_order_id = $this->grid->GetCellValue($event->GetRow(), 1);

	$sql_delete = "DELETE FROM `work_order` WHERE `work_order_number` = {$work_order_id} AND `id` = {$entry_id};";

	$delete = $this->the_db->query_sql_insert($sql_delete);


	if ($delete['status'] === 0) {
		//$this->work_order_record_status->SetLabel(error_work_order.$delete['log']);
		var_dump(error_work_order.$delete['log']);
		return;
	}
	
	$this->insertData();
	$this->grid->DeleteRows($event->GetRow(), 1);
	var_dump(work_order_deleted);

		return;

	}

}


 ?>