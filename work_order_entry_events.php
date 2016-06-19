<?php 


class work_order_entry_events extends work_order_entry
{

	//private $the_db = null;
	
	function __construct($product_id = null, $book_number = null, $date = null, $db = null)
	{
		//$this->Connect( wxEVT_ACTIVATE, array($this, "main_frame_activate") );
		parent::__construct();

		$this->product_id_local = $product_id;
		$this->book_number_local = $book_number;
		$this->date = $date;
		$this->the_db = $db;

		$this->product_id_val->SetValue($this->product_id_local);
		$this->work_order_val->SetValue($this->product_id_local);
		$this->book_number_val->SetValue($this->book_number_local);
		$this->date_val->SetValue($this->date);

$this->work_order_record_status->SetLabel("");
//	var_dump($this->the_db->query_sql_select("SELECT * FROM general_info;"));

///

	$count_records = $this->the_db->query_sql_select("SELECT `id` FROM work_order;");
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

	$insert_db = $this->the_db->query_sql_insert("INSERT INTO `work_order` (`id`,`work_order_number`,`book_number`,`amount`,`date`,`comments`) VALUES ( null, {$work_order_val}, {$book_number_val}, '{$amount_val}', '{$date_val}', '{$comments_val}');");


	if ($insert_db['status'] === 0) {
		$this->work_order_record_status->SetLabel(error_work_order.$insert_db['log']);
		return;
	}
	

	$this->work_order_record_status->SetLabel(work_order_added);

		//$this->book_number_val->SetValue(null);
		$this->amount_val->SetValue(null);
		$this->date_val->SetValue(null);
		$this->comments_val->SetValue(null);
	$count_records = $this->the_db->query_sql_select("SELECT `id` FROM work_order;");
	$this->work_order_record_val->SetLabel(count($count_records));


	var_dump($insert_db);

//var_dump($work_order_vals);



	}

}


 ?>