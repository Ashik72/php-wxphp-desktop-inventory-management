<?php 

require_once "event_actions.php";

require_once "home.php";


require_once "records_frame.php";

require_once "records_frame_events.php";

require_once "printing.php";

require_once "generate_pdf.php";

require_once "csv_frame_events.php";

/**
* Home Extended
*/
class homeExtend extends homeFrame
{
	
	function __construct()
	{
		parent::__construct();

		$this->print = new localPrinter;

		return;

	}

	function click_add_records( $event ){
		$event->Skip();

	//$this->mf = new event_frame01(10);
    $this->mf = new event_frame01();
    $this->mf->Show();
	
	return;

	}

	function click_view_records( $event ){
		$event->Skip();
	
	$this->mf = new records_Frame_Events();
    //$this->mf = new event_frame01();
    $this->mf->Show();

		return;

	}

	function exit_window( $event ){
		$event->Skip();
	
		parent::Close();

		return;

	}

	function print_records( $event ){
		$event->Skip();


	$theCSV = new csvGenerator("abcd.csv");
	
	$this->csv_frame = new FRMAE_CSV_Events($theCSV);
    $this->csv_frame->Show();


		

		return $result;
	}


}


 ?>