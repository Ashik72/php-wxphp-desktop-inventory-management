<?php 

//require_once "main.php";

/**
* frame_01 events
*/

require_once "config.php";

require_once "db_class.php";


require_once "frame_01.php";


class event_frame01 extends MyFrame1
{

	private $the_db = null;
	
	function __construct()
	{
		//$this->Connect( wxEVT_ACTIVATE, array($this, "main_frame_activate") );
		parent::__construct();
	}

	function main_frame_activate( $event ){
		$event->Skip();

		$this->the_db = new DB_Ops();


		////Form mods
		$this->shop_code_val->Set(unserialize (shop_codes));
		
		$this->product_id_val1->Enable(False);

		$this->product_id_val1->SetValue("val 2");

		$this->m_statusBar4->SetStatusText("Application started!");
	}


	function buttonClickUpdate( $event ){
		$event->Skip();
		$field_values = array(
			
			'phone' => $this->cust_ph_number_val->GetValue()


			);



	}

}



 ?>