<?php 


class edit_work_order_entry_events extends work_order_entry
{

	//private $the_db = null;
	
	function __construct($entry_id = null, $work_order_id = null, $db = null)
	{
		//$this->Connect( wxEVT_ACTIVATE, array($this, "main_frame_activate") );
		parent::__construct();

		$this->entry_id = (int) $entry_id;
		$this->work_order_id = (int) $work_order_id;
		$this->the_db = $db;

		$get_data = $this->the_db->query_sql_select("SELECT * FROM work_order WHERE `work_order_number` = {$this->work_order_id} AND `id` = {$this->entry_id} LIMIT 1;")[0];
		var_dump($get_data);

		$this->product_id_val->SetValue($get_data['id']);
		$this->work_order_val->SetValue($get_data['work_order_number']);
		$this->book_number_val->SetValue($get_data['book_number']);
		$this->amount_val->SetValue($get_data['amount']);
		$this->date_val->SetValue($get_data['date']);
		$this->comments_val->SetValue($get_data['comments']);

$this->work_order_record_status->SetLabel("");
//	var_dump($this->the_db->query_sql_select("SELECT * FROM general_info;"));

///

	$count_records = $this->the_db->query_sql_select("SELECT `id` FROM work_order WHERE `work_order_number` = {$this->work_order_id};");
	$this->work_order_record_val->SetLabel(count($count_records));


	}

	function work_order_on_submit( $event ){
		$event->Skip();


			$product_id_local = (int) $this->the_db->escapeString($this->product_id_local);
			$work_order_val = (int) $this->the_db->escapeString($this->work_order_val->GetValue());
			$book_number_val = (int) $this->the_db->escapeString($this->book_number_val->GetValue());
			$amount_val = $this->the_db->escapeString($this->amount_val->GetValue());
			$date_val = $this->the_db->escapeString($this->date_val->GetValue());
			$comments_val = $this->the_db->escapeString($this->comments_val->GetValue());


	$sql_update = "UPDATE `work_order` ";
	$sql_update .= "SET `id` = {$product_id_local},`work_order_number` = {$work_order_val},`book_number` = {$book_number_val},`amount` = '{$amount_val}', `date` = '{$date_val}', `comments` = '{$comments_val}' ";
	$sql_update .= "WHERE `work_order_number` = {$this->work_order_id} AND `id` = {$this->entry_id};";

	$update = $this->the_db->query_sql_insert($sql_update);


	if ($update['status'] === 0) {
		$this->work_order_record_status->SetLabel(error_work_order.$update['log']);
		return;
	}
	

	$this->work_order_record_status->SetLabel(work_order_updated);

		$get_data = $this->the_db->query_sql_select("SELECT * FROM work_order WHERE `work_order_number` = {$this->work_order_id} AND `id` = {$this->entry_id} LIMIT 1;")[0];
		var_dump($get_data);

		$this->product_id_val->SetValue($get_data['id']);
		$this->work_order_val->SetValue($get_data['work_order_number']);
		$this->book_number_val->SetValue($get_data['book_number']);
		$this->amount_val->SetValue($get_data['amount']);
		$this->date_val->SetValue($get_data['date']);
		$this->comments_val->SetValue($get_data['comments']);



	//var_dump($insert_db);

//var_dump($work_order_vals);



	}

}


 ?>