<?php 

//require_once "main.php";

/**
* frame_01 events
*/



class event_frame01_edit extends event_frame01
{

	private $the_db = null;
	private $product_id_local = null;
	private $book_number_local = null;

	function __construct($product_id_ext = null, $row = null, $col = null, $val = null, $amount = null)
	{
		//$this->Connect( wxEVT_ACTIVATE, array($this, "main_frame_activate") );
		parent::__construct();
		$this->product_id_ext = $product_id_ext;
		global $errors;
		$this->errors = $errors;

		$this->wo_row = $row;
		$this->wo_col = $col;
		$this->wo_val = $val;
		$this->wo_amount = $amount;

	}

	function main_frame_activate( $event ){
		$event->Skip();

		//DB Mods

		$this->the_db = new DB_Ops();

		$row_count = count($this->the_db->query_sql_select("SELECT * FROM general_info;"));
		$this->last_id = $this->the_db->query_sql_select("SELECT * FROM general_info;")[$row_count-1]['id'];


		////Form mods

		$this->shop_code_val->Set(unserialize (shop_codes));
		$this->unit_of_measurement->Set(unserialize (unit_of_measurement));

		$this->product_id_val1->Enable(False);

		$this->product_id_val1->SetValue($this->last_id+1);

		$this->product_id_local = $this->product_id_val1->GetValue();



		$this->m_statusBar4->SetStatusText(app_started);

		//$this->product_update->SetLabel("ahds");
		date_default_timezone_set(TIMEZONE);
		$this->date = date("d/m/Y");
		$this->date_txt_val->SetValue($this->date);
		$this->adv_date_txt_val->SetValue($this->date);

		if (!empty($this->product_id_ext)) {
			$this->entry_exists_already();
		}

	}


	function buttonClickUpdate( $event ){
		$event->Skip();

		if ($this->shop_code_val->GetSelection() === -1)
			$shop_code_val = null;
		else
			$shop_code_val = $this->shop_code_val->GetString($this->shop_code_val->GetSelection());

		if ($this->unit_of_measurement->GetSelection() === -1)
			$unit_of_measurement = null;
		else
			$unit_of_measurement = $this->unit_of_measurement->GetString($this->unit_of_measurement->GetSelection());



		//var_dump($this->the_db->query_sql_select("SELECT `id` FROM `work_order` WHERE `work_order_number` = {$this->product_id_val1->GetValue()};"));

	$work_order_status = $this->the_db->query_sql_select("SELECT `id` FROM `work_order` WHERE `work_order_number` = {$this->product_id_val1->GetValue()};");

	var_dump($work_order_status);
	//var_dump($this->errors);

	if (count($work_order_status) < 1) {


		$this->m_statusBar4->SetStatusText($this->errors['work_order_empty']);
		return;

	}


			
			$date_txt_val = $this->the_db->escapeString($this->date_txt_val->GetValue());
			$product_id_val1 = (int) $this->the_db->escapeString($this->product_id_val1->GetValue());
			$shop_code_val = $this->the_db->escapeString($shop_code_val);

			$customer_name_val = $this->the_db->escapeString($this->customer_name_val->GetValue());
			$cust_address_val = $this->the_db->escapeString($this->cust_address_val->GetValue());
			$book_number_val = $this->the_db->escapeString($this->book_number_val->GetValue());

			$cust_ph_number_val = $this->the_db->escapeString($this->cust_ph_number_val->GetValue());
			$desc_goods_val = $this->the_db->escapeString($this->desc_goods_val->GetValue());
			$quan_val = $this->the_db->escapeString($this->quan_val->GetValue());
			$unit_of_measurement = $this->the_db->escapeString($unit_of_measurement);

			$amount_val = $this->the_db->escapeString($this->amount_val->GetValue());
			$adv_val = $this->the_db->escapeString($this->adv_val->GetValue());
			$adv_date_txt_val = $this->the_db->escapeString($this->adv_date_txt_val->GetValue());

			$product_delivered_opt = $this->the_db->escapeString($this->product_delivered_opt->GetString($this->product_delivered_opt->GetSelection()));

			$rate_val = $this->the_db->escapeString($this->rate_val->GetValue());

	//$insert_entry = $this->the_db->query_sql_insert("INSERT INTO `general_info`(`id`,`shop_code`,`book_number`,`work_order_number`,`date`,`customer_name`,`customer_address`,`customer_phone_number`,`description_of_goods`,`quantity`,`unit_of_mesurement`,`rate`,`amount`,`adv`,`adv_date`,`product_delivered`) VALUES (null,'{$shop_code_val}','{$book_number_val}',{$product_id_val1},'{$date_txt_val}','{$customer_name_val}','{$cust_address_val}','{$cust_ph_number_val}','{$desc_goods_val}','{$quan_val}','{$unit_of_measurement}','{$rate_val}','{$amount_val}','{$adv_val}','{$adv_date_txt_val}','{$product_delivered_opt}');");

	$sql_update_entry = "UPDATE `general_info` SET ";
	$sql_update_entry .= "`id` = {$product_id_val1},`shop_code` = '{$shop_code_val}',`book_number` = '{$book_number_val}',`work_order_number` = {$product_id_val1},`date` = '{$date_txt_val}',`customer_name` = '{$customer_name_val}',`customer_address` = '{$cust_address_val}',`customer_phone_number` = '{$cust_ph_number_val}',`description_of_goods` = '{$desc_goods_val}',`quantity` = '{$quan_val}',`unit_of_mesurement` = '{$unit_of_measurement}',`rate` = '{$rate_val}',`amount` = '{$amount_val}',`adv` = '{$adv_val}',`adv_date` = '{$adv_date_txt_val}',`product_delivered` = '{$product_delivered_opt}' ";
	$sql_update_entry .= "WHERE `id` = {$this->product_id_local};";

//UPDATE `work_order` SET `comments`=? WHERE `_rowid_`='18';

	$insert_entry = $this->the_db->query_sql_insert($sql_update_entry);

	if ($insert_entry['status'] === 0) {
		$this->m_statusBar4->SetStatusText(error_pro_entry.$insert_entry['log']);
		return;
	}
	
	$this->entry_exists_already();

	$this->m_statusBar4->SetStatusText(product_entry_updated);



	}



	function date_txt_val_buttonClickUpdate( $event ){
		$event->Skip();

	}

	function work_order_view_buttonClickUpdate( $event ){

		 $event->Skip();


		$this->book_number_local = $this->book_number_val->GetValue();

   		// $this->mf_work_order_entry = new WORK_ORDER_SHOW_Events($this->the_db, $event->GetCol(), $event->GetRow(), $this->grid->GetCellValue($event->GetRow(), $event->GetCol()), $this->total_amount);
	 	$this->mf_work_order_entry_edit = new WORK_ORDER_SHOW_Events($this->the_db, $this->wo_col, $this->wo_row, $this->wo_val, $this->wo_amount);
   		$this->mf_work_order_entry_edit->Show();


	}


	function amount_val_focus_button( $event ){
		$event->Skip();

		if (!empty((int) $this->quan_val->GetValue()) && !empty((int) $this->rate_val->GetValue())) {

			$total = (int) $this->rate_val->GetValue() * (int) $this->quan_val->GetValue();

			$this->amount_val->SetValue($total);
		}

		return;

	}

	function entry_exists_already() {

			$this->product_id_local = $this->product_id_ext;
			$this->product_id_val1->SetValue($this->product_id_local);
			$this->product_data = $this->the_db->query_sql_select("SELECT * FROM general_info WHERE `id` = {$this->product_id_local}; LIMIT 1")[0];

			var_dump($this->product_data);

			$uom_index = $this->unit_of_measurement->FindString($this->product_data['unit_of_mesurement']);
			$this->unit_of_measurement->SetSelection($uom_index);


			$sc_index = $this->shop_code_val->FindString($this->product_data['shop_code']);
			$this->shop_code_val->SetSelection($sc_index);

			$pd_index = $this->product_delivered_opt->FindString($this->product_data['product_delivered']);
			$this->product_delivered_opt->SetSelection($pd_index);

			//var_dump($pd_index);


			$this->date_txt_val->SetValue($this->product_data['date']);
			$this->customer_name_val->SetValue($this->product_data['customer_name']);
			$this->cust_address_val->SetValue($this->product_data['customer_address']);
			$this->book_number_val->SetValue($this->product_data['book_number']);
			$this->cust_ph_number_val->SetValue($this->product_data['customer_phone_number']);
			$this->desc_goods_val->SetValue($this->product_data['description_of_goods']);
			$this->quan_val->SetValue($this->product_data['quantity']);
			$this->amount_val->SetValue($this->product_data['amount']);
			$this->adv_val->SetValue($this->product_data['adv']);
			$this->adv_date_txt_val->SetValue($this->product_data['adv_date']);
			$this->rate_val->SetValue($this->product_data['rate']);
			///status
			$this->m_statusBar4->SetStatusText(editing_product.$this->product_id_local);

	}




}



 ?>